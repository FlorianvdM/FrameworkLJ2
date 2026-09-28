@extends('layouts.app')

@section('title', 'Gebruikers')

@section('content')

<div class="card">
    <h1>Gebruikers</h1>

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
                <td><a href="{{ route('users.get', $user->id) }}" class="btn">Bekijken</a></td>
            </tr>
        @endforeach
    </table>
</div>

@endsection