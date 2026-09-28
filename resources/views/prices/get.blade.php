@extends('layouts.app')

@section('title', 'Prijs aanpassen')

@section('content')

<div class="card">
    <h1>Prijs aanpassen</h1>

    <form class="form" method="POST" action="{{ route('prices.update', $price->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label" for="product_id">Product</label>
            <select class="form-input" id="product_id" name="product_id">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" @selected(old('product_id', $price->product_id) == $product->id)>{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="price">Prijs</label>
            <input class="form-input" type="number" id="price" name="price" min="0" step="0.01" value="{{ old('price', $price->price) }}">
        </div>

        <div class="form-group">
            <label class="form-label" for="effdate">Ingangsdatum</label>
            <input class="form-input" type="datetime-local" id="effdate" name="effdate" value="{{ old('effdate', \Carbon\Carbon::parse($price->effdate)->format('Y-m-d\TH:i')) }}">
        </div>

        <div class="form-actions">
            <a href="{{ route('prices.index') }}" class="btn btn-secondary">Terug</a>
            <button type="submit" class="btn">Opslaan</button>
        </div>
    </form>
</div>

@endsection
