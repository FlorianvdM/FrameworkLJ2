@extends('layouts.app')

@section('content')

    <h1>Products</h1>

    @foreach ($products as $product)
        <h2>
            <a href="{{ route('products.show', $product) }}">
                {{ $product->name }}
            </a>
        </h2>

        <p>{{ $product->description }}</p>

        <p>Categorie: {{ $product->category->name }}</p>

        <hr>
    @endforeach

@endsection