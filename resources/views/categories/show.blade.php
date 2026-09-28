@extends('layouts.app')

@section('content')

    <h1>{{ $category->name }}</h1>

    @foreach ($category->products as $product)
        <h2>
            <a href="{{ route('products.show', $product) }}">
                {{ $product->name }}
            </a>
        </h2>

        <p>{{ $product->description }}</p>
    @endforeach

    <a href="{{ route('categories.index') }}">Terug naar categories</a>

@endsection