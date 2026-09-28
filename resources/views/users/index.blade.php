@extends('layouts.app')

@section('content')

    <h1>Users</h1>

    <table border="1" cellpadding="5">
        <tr>
            <th>Naam</th>
            <th>E-mail</th>
            <th>Rol</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role?->name }}</td>
            </tr>
        @endforeach
    </table>

@endsection