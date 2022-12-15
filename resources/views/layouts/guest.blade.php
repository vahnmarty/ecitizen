<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="min-h-full">
    <div class="h-full font-sans antialiased text-gray-900 bg-gray-100">

        <div x-data="{ isOpen: false }" class="relative py-6 overflow-hidden bg-white">

            <div>
                @include('includes.frontend.nav')
            </div>
        </div>

        {{ $slot }}

    </div>

    @livewireScripts

</body>

</html>
