@extends('layouts.app')

@section('title', 'Gebruikers')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Gebruikers</h1>

        <button type="button" id="open-create-user" class="btn">
            Nieuwe gebruiker
        </button>
    </div>

    <table>
        <tr>
            <th>Naam</th>
            <th>E-mail</th>
            <th>Rol</th>
            <th></th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role?->name }}</td>
                <td>
                    <div class="list-actions">
                        <a href="{{ route('users.get', $user->id) }}" class="btn">Bekijken</a>

                        @if ($user->canDelete())
                            <form
                                method="POST"
                                action="{{ route('users.delete', $user->id) }}"
                                style="display: inline;"
                                onsubmit="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?');"
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

@include('users.partials.create')

<script>
    const userModal = document.getElementById('create-user-modal');
    const openUserBtn = document.getElementById('open-create-user');
    const closeUserBtn = document.getElementById('close-create-user');
    const cancelUserBtn = document.getElementById('cancel-create-user');

    openUserBtn?.addEventListener('click', () => userModal.showModal());
    closeUserBtn?.addEventListener('click', () => userModal.close());
    cancelUserBtn?.addEventListener('click', () => userModal.close());
</script>

@endsection