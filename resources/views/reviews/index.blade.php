@extends('layouts.app')

@section('title', 'Reviews')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Reviews</h1>

        <button type="button" id="open-create-review" class="btn">
            Nieuwe review
        </button>
    </div>

    <ul class="list">
        @foreach ($reviews as $review)
            <li class="list-item">
                <span class="list-item-title">
                    {{ $review->product->name }}
                    <span class="list-item-sub">{{ $review->comment }}<br>Door: {{ $review->user->name }}</span>
                </span>

                <div class="list-actions">
                    <a href="{{ route('reviews.get', $review->id) }}" class="btn">Bekijken</a>

                    <form
                        method="POST"
                        action="{{ route('reviews.delete', $review->id) }}"
                        style="display: inline;"
                        onsubmit="return confirm('Weet je zeker dat je deze review wilt verwijderen?');"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>

@include('reviews.partials.create')

<script>
    const reviewModal = document.getElementById('create-review-modal');
    const openReviewBtn = document.getElementById('open-create-review');
    const closeReviewBtn = document.getElementById('close-create-review');
    const cancelReviewBtn = document.getElementById('cancel-create-review');

    openReviewBtn?.addEventListener('click', () => reviewModal.showModal());
    closeReviewBtn?.addEventListener('click', () => reviewModal.close());
    cancelReviewBtn?.addEventListener('click', () => reviewModal.close());
</script>

@endsection