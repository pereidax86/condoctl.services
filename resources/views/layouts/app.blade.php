<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'condoctl.services') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/sass/app.scss', 'resources/css/layout.css'])
</head>

<body>

    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- Contenido principal -->
    <div class="contenedor-flexbox" >
        <!-- Sidebar -->
        <div class="flex-grow-1 flex" >
            @include('layouts.sidebar')
        </div>

        <!-- Contenido -->
        <div class="flex-grow-1 flex">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>

</html>
