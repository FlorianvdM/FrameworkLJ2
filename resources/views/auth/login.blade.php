@extends('layouts.app')

@section('title', 'Inloggen')

@section('content')

<div class="card" style="max-width: 420px; margin: 40px auto;">
    <div class="card-header">
        <h1>Inloggen</h1>
    </div>

    <form method="POST" action="{{ route('login.attempt') }}" class="form">
        @csrf

        <div class="form-group">
            <label for="email" class="form-label">E-mailadres</label>

            <input
                type="email"
                id="email"
                name="email"
                class="form-input"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Wachtwoord</label>

            <input
                type="password"
                id="password"
                name="password"
                class="form-input"
                required
            >
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">Inloggen</button>
        </div>
    </form>
</div>

@endsection
