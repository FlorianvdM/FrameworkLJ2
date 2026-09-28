@extends('layouts.app')

@section('title', 'Order aanpassen')

@section('content')

<div class="card">
    <h1>Order aanpassen</h1>

    <form class="form" method="POST" action="{{ route('orders.update', $order->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label" for="user_id">Gebruiker</label>
            <select class="form-input" id="user_id" name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" @selected(old('user_id', $order->user_id) == $user->id)>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="order_date">Orderdatum</label>
            <input class="form-input" type="datetime-local" id="order_date" name="order_date" value="{{ old('order_date', \Carbon\Carbon::parse($order->order_date)->format('Y-m-d\TH:i')) }}">
        </div>

        <div class="form-group">
            <label class="form-label" for="status">Status</label>
            <input class="form-input" type="number" id="status" name="status" min="0" max="255" value="{{ old('status', $order->status) }}">
        </div>

        <div class="form-actions">
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Terug</a>
            <button type="submit" class="btn">Opslaan</button>
        </div>
    </form>
</div>

@endsection
