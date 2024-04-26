<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // if (Auth::check()) {
        //     $user = Auth::user(); // Get the authenticated user

        //     // Insert the event with the authenticated user's ID
        //     Event::create([
        //         'user_id' => $user->id,
        //         'descriptions' => 'descriptionsdescriptionsdescriptionsdescriptionsdescriptions',
        //         'name' => 'user1',
        //         'timeStart' => '08:00:00',
        //         'timeEnd' => '19:00:00',
        //         'dateStart' => '2024-04-15', // Correct date format (YYYY-MM-DD)
        //         'dateEnd' => '2024-04-18',   // Correct date format (YYYY-MM-DD)
        //         'locations' => 'casablanca',
        //         'price' => '999',
        //     ]);
        // } else {
            
        // }
    }
}
