@extends('layouts.app')

@section('title', 'Orders')

@section('content')

<div class="card">
    <h1>Orders</h1>

    <table>
        <tr>
            <th>Order</th>
            <th>Klant</th>
            <th>Datum</th>
            <th>Status</th>
            <th></th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->status }}</td>
                <td><a href="{{ route('orders.get', $order->id) }}" class="btn">Bekijken</a></td>
            </tr>
        @endforeach
    </table>
</div>

@endsection