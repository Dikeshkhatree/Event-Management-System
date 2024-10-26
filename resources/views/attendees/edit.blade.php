@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Attendee</h1>
    <form action="{{ route('attendees.update', $attendee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $attendee->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $attendee->email }}" required>
        </div>
        <div class="form-group">
            <label for="event_id">Event</label>
            <select name="event_id" id="event_id" class="form-control" required>
                @foreach($events as $event)
                    <option value="{{ $event->id }}" {{ $event->id == $attendee->event_id ? 'selected' : '' }}>
                        {{ $event->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update</button>
        <a href="{{ route('attendees.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
</div>
@endsection
