@extends('layouts.app')

@section('title', 'Orderregels')

@section('content')

<div class="card">
    <h1>Orderregels</h1>

    <table>
        <tr>
            <th>Order</th>
            <th>Product</th>
            <th></th>
        </tr>
        @foreach ($orderRows as $orderRow)
            <tr>
                <td>{{ $orderRow->order->id }}</td>
                <td>{{ $orderRow->product->name }}</td>
                <td><a href="{{ route('orderrows.get', $orderRow->id) }}" class="btn">Bekijken</a></td>
            </tr>
        @endforeach
    </table>
</div>

@endsection