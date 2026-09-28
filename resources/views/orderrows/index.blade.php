@extends('layouts.app')

@section('content')

    <h1>Order rows</h1>

    <table border="1" cellpadding="5">
        <tr>
            <th>Order</th>
            <th>Product</th>
        </tr>
        @foreach ($orderRows as $orderRow)
            <tr>
                <td>{{ $orderRow->order->id }}</td>
                <td>{{ $orderRow->product->name }}</td>
            </tr>
        @endforeach
    </table>

@endsection