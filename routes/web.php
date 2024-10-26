<?php
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AttendeeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('/events', EventController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/attendees', AttendeeController::class);

