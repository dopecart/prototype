<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('themes/admin/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('themes/admin/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div id="app">
        <nav class="flex px-4 py-3 bg-purple-900 text-white">
            <!-- Left Side Of Navbar -->
            <div class="mr-auto">
                <a class="hover:bg-purple-800 rounded-sm cursor-pointer p-2" href="{{ route('home') }}">
                    {{ config('app.name', 'Dopecart') }}
                </a>
            </div>

            <!-- Right Side Of Navbar -->
            <div class="ml-auto">
                <ul class="ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a class="hover:bg-purple-800 rounded-sm cursor-pointer p-2">
                                {{ Auth::user()->name() }} <span class="caret"></span>
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
