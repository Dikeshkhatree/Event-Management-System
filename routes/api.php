<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\AttendeeController;
use App\Http\Controllers\Api\CategoryController;

// Event routes
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);

// Attendee routes
Route::get('/events/{id}/attendees', [AttendeeController::class, 'index']); // List attendees for a specific event
Route::post('/events/{id}/attendees', [AttendeeController::class, 'store']); // Add an attendee to an event

// Category routes
Route::get('/categories', [CategoryController::class, 'index']); // List all categories
Route::get('/categories/{id}/events', [CategoryController::class, 'show']); // List events by category
