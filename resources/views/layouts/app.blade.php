<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ env('APP_TITLE') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @livewireStyles
</head>
<body class="antialiased">
    <div class="md:flex flex-row w-full max-h-screen">
        <div class="md:w-1/3 w-full overflow-scroll">
            <x-sidebar/>
        </div>
        <div class="bg-gray-100 md:w-2/3 w-full p-6 overflow-scroll min-h-screen">
            <x-flash-message/>
            @yield('content')
            {{ $slot ?? '' }}
        </div>
    </div>
    @livewireScripts
</body>
</html>
