<?php

namespace Database\Seeders;

use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Database\Seeder;

class AttendeeSeeder extends Seeder
{
    public function run()
    {
        // Fetch all events
        $events = Event::all();

        foreach ($events as $event) {
            // Assign 3 random attendees to each event
            for ($i = 1; $i <= 3; $i++) {
                Attendee::create([
                    'name' => "Attendee $i for Event {$event->title}",
                    'email' => "attendee{$i}@example.com",
                    'event_id' => $event->id,
                ]);
            }
        }
    }
}
