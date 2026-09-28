@extends('layouts.app')

@section('title', $user->name)

@section('content')

<div class="card">
    <h1>Gebruiker aanpassen</h1>

    <form class="form" method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label" for="name">Naam</label>
            <input class="form-input" type="text" id="name" name="name" value="{{ old('name', $user->name) }}">
        </div>

        <div class="form-group">
            <label class="form-label" for="email">E-mail</label>
            <input class="form-input" type="email" id="email" name="email" value="{{ old('email', $user->email) }}">
        </div>

        <div class="form-group">
            <label class="form-label" for="role_id">Rol</label>
            <select class="form-input" id="role_id" name="role_id">
                <option value="">Geen rol</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" @selected(old('role_id', $user->role_id) == $role->id)>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-actions">
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Terug</a>
            <button type="submit" class="btn">Opslaan</button>
        </div>
    </form>
</div>

@endsection
