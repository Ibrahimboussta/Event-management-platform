<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class EventController extends Controller
{
    //
    public function index()
    {
        $user = User::find(Auth::id())->load('events');
        return view('admin.oragnisateur', compact('user'));
    }
    

    public function event()
    {
        $events = Event::all();
        return view('events.event', compact('events'));
    }


    public function search(Request $request)
    {
        $search = $request->search;

        $events = Event::where('name', 'like', "%$search%")
            ->orWhere('descriptions', 'like', "%$search%")
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', '%$search%');
            })
            ->get();

        return view('events.event', compact('events', 'search'));
    }

    public function  ticket()
    {
        return view('ticket.ticket');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

    
        

        $event = Event::create(
            [
                'user_id' => $user->id,
                'name' => $request->name,
                'descriptions' => $request->descriptions,
                'dateStart' => $request->dateStart,
                'dateEnd' => $request->dateEnd,
                'timeStart' => $request->timeStart,
                'timeEnd' => $request->timeEnd,
                'locations' => $request->locations,
                'price' => $request->price,
            ]
        );

        // Event::create($data);

        return back();
    }

    public function session(Request $request, $eventId)
    {
        // dd($eventId);
        if (!Auth::check()) {
            // Handle unauthenticated user (e.g., redirect to login page)
            return redirect()->route('register');
        }

        $user = Auth::user();
        if (!$user->events()->where('calendar_id', $eventId)->exists()) {
            // return back()->with('error', 'You have already bought this event.');
            $user->events()->attach($eventId);
        }




        Stripe::setApiKey(config('stripe.sk'));
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            "name" => $request->name,
                            "description" => $request->description
                        ],
                        'unit_amount'  => $request->price . '00', // amount should be in cents
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment', // the mode  of payment
            'success_url' => route('success'), // route when success 
            'cancel_url'  => route('dashboard'), // route when  failed or canceled
        ]);

        return redirect()->away($session->url);
    }



    public function show(Event $event)
    {

        // return view('calender', compact('calender'));

        $events = Event::all()->map(function (Event $e) {

            $start = $e->dateStart . " " . $e->timeStart;
            $end = $e->dateEnd . " " . $e->timeEnd;

            return [
                "start" => $start,
                "end" => $end,
                "title" => $e->name,
                "color" => "#FF5733", // Set the color of the event
                "textColor" => "#FFFFFF", // Set the text color of the event
                // "color" => "#000", 
            ];
        });
        return response()->json([
            'events' => $events,
        ]);
    }

    public function showdata(Event $event)
    {
        return view("admin.components.edit", compact("event"));
    }

    public function update(Request $request, Event $event)
    {

        $user_id = Auth()->id();
        $data = [
            'user_id' => $user_id,
            'name' => $request->name,
            'descriptions' => $request->descriptions,
            'dateStart' => $request->dateStart,
            'dateEnd' => $request->dateEnd,
            'timeStart' => $request->timeStart,
            'timeEnd' => $request->timeEnd,
            'locations' => $request->locations,
            'price' => $request->price,
        ];

        $event->update($data);

        return redirect()->route('oragnisateur.index');
    }


    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with('success', 'Event deleted successfully!');
    }
}
