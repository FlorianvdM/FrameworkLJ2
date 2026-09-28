@extends('layouts.app')

@section('title', 'Reviews')

@section('content')

<div class="card">
    <h1>Reviews</h1>

    <ul class="list">
        @foreach ($reviews as $review)
            <li class="list-item">
                <span class="list-item-title">
                    {{ $review->product->name }}
                    <span class="list-item-sub">{{ $review->comment }}<br>Door: {{ $review->user->name }}</span>
                </span>

                <div class="list-actions">
                    <a href="{{ route('reviews.get', $review->id) }}" class="btn">Bekijken</a>
                </div>
            </li>
        @endforeach
    </ul>
</div>

@endsection