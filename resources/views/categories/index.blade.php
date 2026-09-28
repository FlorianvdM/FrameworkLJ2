@extends('layouts.app')

@section('title', 'Categorieën')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Categorieën</h1>

        <button type="button" id="open-create-category" class="btn">
            Nieuwe categorie
        </button>
    </div>

    <ul class="list">
        @foreach ($categories as $category)
            <li class="list-item">
                <span class="list-item-title">
                    {{ $category->name }}
                </span>

                <div class="list-actions">
                    <a href="{{ route('categories.get', $category->id) }}" class="btn">Bekijken</a>

                    @if ($category->canDelete())
                        <form
                            method="POST"
                            action="{{ route('categories.delete', $category->id) }}"
                            style="display: inline;"
                            onsubmit="return confirm('Weet je zeker dat je deze categorie wilt verwijderen?');"
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

@include('categories.partials.create')

<script>
    const modal = document.getElementById('create-category-modal');
    const openBtn = document.getElementById('open-create-category');
    const closeBtn = document.getElementById('close-create-category');
    const cancelBtn = document.getElementById('cancel-create-category');

    openBtn?.addEventListener('click', () => modal.showModal());
    closeBtn?.addEventListener('click', () => modal.close());
    cancelBtn?.addEventListener('click', () => modal.close());
</script>

@endsection