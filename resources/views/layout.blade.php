<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/style.css">


    @if(env('APP_ENV') == 'local')
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    @elseif(env('APP_ENV') == 'prod')
        <link rel="stylesheet" type="text/css" href="./build/assets/app.css" />
    <!-- <script src="/build/assets/app.js" /> -->
    @endif
    @livewireStyles
</head>

<body>

    @yield('main')
    @livewireScripts
</body>

</html>