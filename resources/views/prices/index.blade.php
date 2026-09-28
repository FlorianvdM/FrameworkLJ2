@extends('layouts.app')

@section('title', 'Prijzen')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Prijzen</h1>

        <button type="button" id="open-create-price" class="btn">
            Nieuwe prijs
        </button>
    </div>

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
                <td>
                    <div class="list-actions">
                        <a href="{{ route('prices.get', $price->id) }}" class="btn">Bekijken</a>

                        <form
                            method="POST"
                            action="{{ route('prices.delete', $price->id) }}"
                            style="display: inline;"
                            onsubmit="return confirm('Weet je zeker dat je deze prijs wilt verwijderen?');"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Verwijderen</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@include('prices.partials.create')

<script>
    const priceModal = document.getElementById('create-price-modal');
    const openPriceBtn = document.getElementById('open-create-price');
    const closePriceBtn = document.getElementById('close-create-price');
    const cancelPriceBtn = document.getElementById('cancel-create-price');

    openPriceBtn?.addEventListener('click', () => priceModal.showModal());
    closePriceBtn?.addEventListener('click', () => priceModal.close());
    cancelPriceBtn?.addEventListener('click', () => priceModal.close());
</script>

@endsection