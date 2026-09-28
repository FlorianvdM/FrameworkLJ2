@extends('layouts.app')

@section('title', $category->name)

@section('content')

<div class="card">
    <h1>Categorie aanpassen</h1>

    <form class="form" method="POST" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label" for="name">Naam</label>
            <input class="form-input" type="text" id="name" name="name" value="{{ old('name', $category->name) }}">
        </div>

        <div class="form-actions">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Terug</a>
            <button type="submit" class="btn">Opslaan</button>
        </div>
    </form>
</div>

<div class="card" style="margin-top: 20px;">
    <h2>Producten in deze categorie</h2>

    <ul class="list">
        @forelse ($category->products as $product)
            <li class="list-item">
                <span class="list-item-title">{{ $product->name }}</span>
                <div class="list-actions">
                    <a href="{{ route('products.get', $product->id) }}" class="btn">Bekijken</a>
                </div>
            </li>
        @empty
            <li>Geen producten gevonden.</li>
        @endforelse
    </ul>
</div>

@endsection
