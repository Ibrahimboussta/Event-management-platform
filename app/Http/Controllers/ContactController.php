<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){
        return view('Contact.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
    
        $name = $request->first_name . ' ' . $request->last_name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
    
        Mail::to('recipient@example.com')->send(new ContactMail($name, $email, $phone, $message));
    
        return back()->with('success', 'Your message has been sent successfully!');
    }
    
}
