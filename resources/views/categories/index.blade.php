@extends('layouts.app')

@section('content')

    <h1>Categories</h1>

    @foreach ($categories as $category)
        <h2>
            <a href="{{ route('categories.show', $category) }}">
                {{ $category->name }}
            </a>
        </h2>
    @endforeach

@endsection