@extends('layouts.app')

@section('content')

    <h1>Roles</h1>

    @foreach ($roles as $role)
        <h2>{{ $role->name }}</h2>
    @endforeach

@endsection