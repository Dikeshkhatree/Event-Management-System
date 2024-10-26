<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class EventController extends Controller
{
    // List all events with categories
    public function index(): JsonResponse
    {
        $events = Event::with('category')->get();

        return response()->json([
            'status' => 'success',
            'data' => $events
        ]);
    }

    // Show a single event with attendees and category
    public function show(int $id): JsonResponse
    {
        $event = Event::with(['category', 'attendees'])->find($id);

        if (!$event) {
            return response()->json([
                'status' => 'error',
                'message' => 'Event not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $event
        ]);
    }
}
