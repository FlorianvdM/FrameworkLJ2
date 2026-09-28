@extends('layouts.app')

@section('title', 'Producten')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Producten</h1>

        <button type="button" id="open-create-product" class="btn">
            Nieuw product
        </button>
    </div>

    <ul class="list">
        @foreach ($products as $product)
            <li class="list-item">
                <span class="list-item-title">
                    {{ $product->name }}
                    <span class="list-item-sub">Categorie: {{ $product->category->name }}</span>
                </span>

                <div class="list-actions">
                    <a href="{{ route('products.get', $product->id) }}" class="btn">Bekijken</a>

                    @if ($product->canDelete())
                        <form
                            method="POST"
                            action="{{ route('products.delete', $product->id) }}"
                            style="display: inline;"
                            onsubmit="return confirm('Weet je zeker dat je dit product wilt verwijderen?');"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Verwijderen</button>
                        </form>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</div>

@include('products.partials.create')

<script>
    const productModal = document.getElementById('create-product-modal');
    const openProductBtn = document.getElementById('open-create-product');
    const closeProductBtn = document.getElementById('close-create-product');
    const cancelProductBtn = document.getElementById('cancel-create-product');

    openProductBtn?.addEventListener('click', () => productModal.showModal());
    closeProductBtn?.addEventListener('click', () => productModal.close());
    cancelProductBtn?.addEventListener('click', () => productModal.close());
</script>

@endsection