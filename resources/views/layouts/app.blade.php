<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Voting App') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-background text-gray-900 text-sm">

    <header class="flex items-center justify-between px-6 py-4">
        <a href="#"><img src="{{ asset('img/app-logo.png') }}" class="w-9 h-9" alt="app-logo"></a>
        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"
                    class="w-7 h-7 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">Idea form section
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, tempore. Error accusamus tenetur
            consequatur expedita maxime deleniti, perspiciatis corporis esse optio, alias totam ut eligendi magnam
            facilis earum ipsa officiis?
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">

                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (99+)</a></li>
                    <li><a href="#" class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">Considering (10) </a></li>
                    <li><a href="#" class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">In Progress (3) </a></li>
                </ul>

                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                   <li><a href="#" class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">Implemented (7) </a></li>
                    <li><a href="#" class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">Closed (55) </a></li>
                </ul>
            </nav>

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
