<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?v=1">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-left">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('image/elefante.png') }}" alt="Logo" class="logo">
                </a>
                <form action="{{ route('home') }}" method="GET" class="flex-grow">
                    <input type="text" placeholder="Buscar" name="search" value="{{ request()->get('search') }}" class="border border-gray-200 rounded py-2 px-4 w-1/2 ">
                </form>
            </div>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </header>

        <div class="custom-divider">

        </div>

            @yield('content')
            <p style="padding-top: 4rem; padding-bottom: 4rem;">
                <img src="{{ asset('image/elefante.png') }}" alt="Logo" class="img-custom">
            </p>
        
    </div>
</body>
</html>