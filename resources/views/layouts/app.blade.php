<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="/assets/libs/bootstrap/bootstrap.min.js"></script>
    <link href="/assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="/assets/css/app.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    ❗️
                    {{ config('app.name', 'Laravel') }}
                </a>
                @guest()
                    <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("loginForm")}}">Авторизация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("registerForm")}}">Регистрация</a>
                            </li>
                        </ul>
                    </div>
                @endguest
                @auth()
                    <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("logout")}}">Выйти</a>
                            </li>
                        </ul>
                    </div>

                @endauth
            </div>
        </nav>
    </header>
    <main class="px-5 py-4">
        @yield('content')
    </main>
</body>
</html>
