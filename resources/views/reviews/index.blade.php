@extends('layouts.app')

@section('content')

    <h1>Reviews</h1>

    @foreach ($reviews as $review)
        <h2>{{ $review->product->name }}</h2>
        <p>{{ $review->comment }}</p>
        <p>Door: {{ $review->user->name }}</p>
        <hr>
    @endforeach

@endsection