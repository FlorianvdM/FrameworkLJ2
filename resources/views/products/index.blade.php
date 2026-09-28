@extends('layouts.app')

@section('title', 'Producten')

@section('content')

<div class="card">
    <h1>Producten</h1>

    <ul class="list">
        @foreach ($products as $product)
            <li class="list-item">
                <span class="list-item-title">
                    {{ $product->name }}
                    <span class="list-item-sub">Categorie: {{ $product->category->name }}</span>
                </span>

                <div class="list-actions">
                    <a href="{{ route('products.get', $product->id) }}" class="btn">Bekijken</a>
                </div>
            </li>
        @endforeach
    </ul>
</div>

@endsection