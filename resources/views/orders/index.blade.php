@extends('layouts.app')

@section('content')

    <h1>Orders</h1>

    <table border="1" cellpadding="5">
        <tr>
            <th>Order</th>
            <th>Klant</th>
            <th>Datum</th>
            <th>Status</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->status }}</td>
            </tr>
        @endforeach
    </table>

@endsection