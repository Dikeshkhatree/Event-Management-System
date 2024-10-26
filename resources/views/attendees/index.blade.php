@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Attendees</h1>
    <a href="{{ route('attendees.create') }}" class="btn btn-primary mb-3">Add Attendee</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Event</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendees as $attendee)
                <tr>
                    <td>{{ $attendee->id }}</td>
                    <td>{{ $attendee->name }}</td>
                    <td>{{ $attendee->email }}</td>
                    <td>{{ $attendee->event->title }}</td>
                    <td>
                        <a href="{{ route('attendees.show', $attendee->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('attendees.edit', $attendee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('attendees.destroy', $attendee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
