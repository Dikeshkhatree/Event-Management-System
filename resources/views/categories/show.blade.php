@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Details</h1>
    <p><strong>ID:</strong> {{ $category->id }}</p>
    <p><strong>Name:</strong> {{ $category->name }}</p>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
