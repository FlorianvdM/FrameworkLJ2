@extends('layouts.app')

@section('title', 'Categorieën')

@section('content')

<div class="card">
    <h1>Categorieën</h1>

    <ul class="list">
        @foreach ($categories as $category)
            <li class="list-item">
                <span class="list-item-title">
                    {{ $category->name }}
                </span>

                <div class="list-actions">
                    <a href="{{ route('categories.get', $category->id) }}" class="btn">Bekijken</a>
                </div>
            </li>
        @endforeach
    </ul>
</div>

@endsection