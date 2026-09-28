@extends('layouts.app')

@section('title', 'Rollen')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Rollen</h1>

        <button type="button" id="open-create-role" class="btn">
            Nieuwe rol
        </button>
    </div>

    <ul class="list">
        @foreach ($roles as $role)
            <li class="list-item">
                <span class="list-item-title">
                    {{ $role->name }}
                </span>

                <div class="list-actions">
                    <a href="{{ route('roles.get', $role->id) }}" class="btn">Bekijken</a>

                    @if ($role->canDelete())
                        <form
                            method="POST"
                            action="{{ route('roles.delete', $role->id) }}"
                            style="display: inline;"
                            onsubmit="return confirm('Weet je zeker dat je deze rol wilt verwijderen?');"
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

@include('roles.partials.create')

<script>
    const roleModal = document.getElementById('create-role-modal');
    const openRoleBtn = document.getElementById('open-create-role');
    const closeRoleBtn = document.getElementById('close-create-role');
    const cancelRoleBtn = document.getElementById('cancel-create-role');

    openRoleBtn?.addEventListener('click', () => roleModal.showModal());
    closeRoleBtn?.addEventListener('click', () => roleModal.close());
    cancelRoleBtn?.addEventListener('click', () => roleModal.close());
</script>

@endsection