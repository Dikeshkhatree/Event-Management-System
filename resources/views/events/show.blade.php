@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Event Details</h1>
    <p><strong>Title:</strong> {{ $event->title }}</p>
    <p><strong>Category:</strong> {{ $event->category->name }}</p>
    <p><strong>Date:</strong> {{ $event->date }}</p>
    <p><strong>Location:</strong> {{ $event->location }}</p>
    <p><strong>Description:</strong> {{ $event->description }}</p>
    <a href="{{ route('events.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
