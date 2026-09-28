@extends('layouts.app')

@section('title', 'Orders')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Orders</h1>

        <button type="button" id="open-create-order" class="btn">
            Nieuwe order
        </button>
    </div>

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
                <td>
                    <div class="list-actions">
                        <a href="{{ route('orders.get', $order->id) }}" class="btn">Bekijken</a>

                        @if ($order->canDelete())
                            <form
                                method="POST"
                                action="{{ route('orders.delete', $order->id) }}"
                                style="display: inline;"
                                onsubmit="return confirm('Weet je zeker dat je deze order wilt verwijderen?');"
                            >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Verwijderen</button>
                            </form>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@include('orders.partials.create')

<script>
    const orderModal = document.getElementById('create-order-modal');
    const openOrderBtn = document.getElementById('open-create-order');
    const closeOrderBtn = document.getElementById('close-create-order');
    const cancelOrderBtn = document.getElementById('cancel-create-order');

    openOrderBtn?.addEventListener('click', () => orderModal.showModal());
    closeOrderBtn?.addEventListener('click', () => orderModal.close());
    cancelOrderBtn?.addEventListener('click', () => orderModal.close());
</script>

@endsection