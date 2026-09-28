<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Spel App</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <div class="container">
            <a class="logo" href="{{ url('/') }}">Spel App</a>

            <nav>
                <a href="{{ route('categories.index') }}">Categories</a>
                <a href="{{ route('products.index') }}">Products</a>
                <a href="{{ route('prices.index') }}">Prices</a>
                <a href="{{ route('reviews.index') }}">Reviews</a>
                <a href="{{ route('orders.index') }}">Orders</a>
                <a href="{{ route('orderrows.index') }}">Order rows</a>
                <a href="{{ route('roles.index') }}">Roles</a>
                <a href="{{ route('users.index') }}">Users</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

</body>
</html>