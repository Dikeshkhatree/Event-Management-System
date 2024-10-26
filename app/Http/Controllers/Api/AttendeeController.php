<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    // List attendees for a specific event
    public function index(int $id): JsonResponse
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json([
                'status' => 'error',
                'message' => 'Event not found'
            ], 404);
        }

        $attendees = $event->attendees;

        return response()->json([
            'status' => 'success',
            'data' => $attendees
        ]);
    }

    // Add a new attendee to a specific event
    public function store(Request $request, int $id): JsonResponse
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json([
                'status' => 'error',
                'message' => 'Event not found'
            ], 404);
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:attendees,email'
        ]);

        $attendee = $event->attendees()->create($validatedData);

        return response()->json([
            'status' => 'success',
            'data' => $attendee
        ], 201);
    }
}
