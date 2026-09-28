@extends('layouts.app')

@section('title', 'Orderregel aanpassen')

@section('content')

<div class="card">
    <h1>Orderregel aanpassen</h1>

    <form class="form" method="POST" action="{{ route('orderrows.update', $orderRow->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label" for="order_id">Order</label>
            <select class="form-input" id="order_id" name="order_id">
                @foreach ($orders as $order)
                    <option value="{{ $order->id }}" @selected(old('order_id', $orderRow->order_id) == $order->id)>Order #{{ $order->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="product_id">Product</label>
            <select class="form-input" id="product_id" name="product_id">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" @selected(old('product_id', $orderRow->product_id) == $product->id)>{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-actions">
            <a href="{{ route('orderrows.index') }}" class="btn btn-secondary">Terug</a>
            <button type="submit" class="btn">Opslaan</button>
        </div>
    </form>
</div>

@endsection
