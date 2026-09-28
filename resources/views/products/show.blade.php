@extends('layouts.app')

@section('content')

    <h1>{{ $product->name }}</h1>

    <p>{{ $product->description }}</p>

    <p>Categorie: {{ $product->category->name }}</p>

    <a href="{{ route('products.index') }}">Terug naar products</a>

@endsection