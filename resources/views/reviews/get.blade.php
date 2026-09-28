@extends('layouts.app')

@section('title', 'Review aanpassen')

@section('content')

<div class="card">
    <h1>Review aanpassen</h1>

    <form class="form" method="POST" action="{{ route('reviews.update', $review->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label" for="product_id">Product</label>
            <select class="form-input" id="product_id" name="product_id">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" @selected(old('product_id', $review->product_id) == $product->id)>{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="user_id">Gebruiker</label>
            <select class="form-input" id="user_id" name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" @selected(old('user_id', $review->user_id) == $user->id)>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="comment">Opmerking</label>
            <textarea class="form-input" id="comment" name="comment" rows="5">{{ old('comment', $review->comment) }}</textarea>
        </div>

        <div class="form-actions">
            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Terug</a>
            <button type="submit" class="btn">Opslaan</button>
        </div>
    </form>
</div>

@endsection
