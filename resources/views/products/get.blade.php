@extends('layouts.app')

@section('title', $product->name)

@section('content')

<div class="card">
    <h1>Product aanpassen</h1>

    <form class="form" method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label" for="name">Naam</label>
            <input class="form-input" type="text" id="name" name="name" value="{{ old('name', $product->name) }}">
        </div>

        <div class="form-group">
            <label class="form-label" for="description">Beschrijving</label>
            <textarea class="form-input" id="description" name="description" rows="5">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label class="form-label" for="category_id">Categorie</label>
            <select class="form-input" id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id) == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-actions">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Terug</a>
            <button type="submit" class="btn">Opslaan</button>
        </div>
    </form>
</div>

@endsection
