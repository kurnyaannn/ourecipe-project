<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Ourecipe</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Specific Page -->
        @stack('css')

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
    </head>
    <body class="bg-gray-100 antialiased">
        @livewire('navbar')
        @if (session()->has('message'))
            <div class="bg-teal-500 text-center py-4 lg:px-4" >
                <div class="p-2 bg-teal-400 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                    <span class="flex rounded-full bg-teal-400 uppercase px-2 py-1 text-xs font-bold mr-3">SUCCESS</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ session('message') }}</span>
                </div>
            </div>
        @endif

        @yield('content')

        @stack('modals')

        @livewire('footer')

        @livewireScripts
    </body>
</html>
