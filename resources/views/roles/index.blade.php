@extends('layouts.app')

@section('title', 'Rollen')

@section('content')

<div class="card">
    <h1>Rollen</h1>

    <ul class="list">
        @foreach ($roles as $role)
            <li class="list-item">
                <span class="list-item-title">
                    {{ $role->name }}
                </span>

                <div class="list-actions">
                    <a href="{{ route('roles.get', $role->id) }}" class="btn">Bekijken</a>
                </div>
            </li>
        @endforeach
    </ul>
</div>

@endsection