<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <livewire:styles />

        <!-- Scripts -->
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="flex flex-col h-screen">
            <x-header/>
            <div class="font-sans text-gray-900 antialiased max-w-7xl mx-auto mt-10 mb-auto px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
            <x-footer />
        </div>
        <livewire:scripts />
    </body>
</html>
