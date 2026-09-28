<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Spel App')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <div class="container">
            <a class="logo" href="{{ url('/') }}">Spel App</a>

            <nav>
                <a href="{{ route('categories.index') }}">Categorieën</a>
                <a href="{{ route('products.index') }}">Producten</a>
                <a href="{{ route('prices.index') }}">Prijzen</a>
                <a href="{{ route('reviews.index') }}">Reviews</a>
                <a href="{{ route('orders.index') }}">Orders</a>
                <a href="{{ route('orderrows.index') }}">Orderregels</a>
                <a href="{{ route('roles.index') }}">Rollen</a>
                <a href="{{ route('users.index') }}">Gebruikers</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

</body>
</html>