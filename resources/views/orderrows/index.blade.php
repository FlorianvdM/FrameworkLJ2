@extends('layouts.app')

@section('title', 'Orderregels')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Orderregels</h1>

        <button type="button" id="open-create-orderrow" class="btn">
            Nieuwe orderregel
        </button>
    </div>

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
                <td>
                    <div class="list-actions">
                        <a href="{{ route('orderrows.get', $orderRow->id) }}" class="btn">Bekijken</a>

                        <form
                            method="POST"
                            action="{{ route('orderrows.delete', $orderRow->id) }}"
                            style="display: inline;"
                            onsubmit="return confirm('Weet je zeker dat je deze orderregel wilt verwijderen?');"
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

@include('orderrows.partials.create')

<script>
    const orderRowModal = document.getElementById('create-orderrow-modal');
    const openOrderRowBtn = document.getElementById('open-create-orderrow');
    const closeOrderRowBtn = document.getElementById('close-create-orderrow');
    const cancelOrderRowBtn = document.getElementById('cancel-create-orderrow');

    openOrderRowBtn?.addEventListener('click', () => orderRowModal.showModal());
    closeOrderRowBtn?.addEventListener('click', () => orderRowModal.close());
    cancelOrderRowBtn?.addEventListener('click', () => orderRowModal.close());
</script>

@endsection