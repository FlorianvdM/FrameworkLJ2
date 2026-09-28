@extends('layouts.app')

@section('title', 'Prijzen')

@section('content')

<div class="card">
    <h1>Prijzen</h1>

    <table>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Ingangsdatum</th>
            <th></th>
        </tr>
        @foreach ($prices as $price)
            <tr>
                <td>{{ $price->product->name }}</td>
                <td>&euro; {{ $price->price }}</td>
                <td>{{ $price->effdate }}</td>
                <td><a href="{{ route('prices.get', $price->id) }}" class="btn">Bekijken</a></td>
            </tr>
        @endforeach
    </table>
</div>

@endsection