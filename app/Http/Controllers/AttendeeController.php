<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function index()
    {
        $attendees = Attendee::with('event')->get();
        return view('attendees.index', compact('attendees'));
    }

    public function create()
    {
        $events = Event::all();
        return view('attendees.create', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'event_id' => 'required|numeric'
        ]);

        Attendee::create($request->all());

        return redirect()->route('attendees.index')->with('success', 'Attendee created successfully.');
    }

    public function show(Attendee $attendee)
    {
        return view('attendees.show', compact('attendee'));
    }

    public function edit(Attendee $attendee)
    {
        $events = Event::all();
        return view('attendees.edit', compact('attendee', 'events'));
    }

    public function update(Request $request, Attendee $attendee)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'event_id' => 'required|numeric',
        ]);

        $attendee->update($request->all());

        return redirect()->route('attendees.index')->with('success', 'Attendee updated successfully.');
    }

    public function destroy(Attendee $attendee)
    {
        $attendee->delete();

        return redirect()->route('attendees.index')->with('success', 'Attendee deleted successfully.');
    }
}
