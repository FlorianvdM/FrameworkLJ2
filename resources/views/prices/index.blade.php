@extends('layouts.app')

@section('content')

    <h1>Prices</h1>

    <table border="1" cellpadding="5">
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Ingangsdatum</th>
        </tr>
        @foreach ($prices as $price)
            <tr>
                <td>{{ $price->product->name }}</td>
                <td>&euro; {{ $price->price }}</td>
                <td>{{ $price->effdate }}</td>
            </tr>
        @endforeach
    </table>

@endsection