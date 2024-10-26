@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Attendee Details</h1>
    <p><strong>Name:</strong> {{ $attendee->name }}</p>
    <p><strong>Email:</strong> {{ $attendee->email }}</p>
    <p><strong>Event:</strong> {{ $attendee->event->title }}</p>
    <a href="{{ route('attendees.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
