<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'condoctl.services') }}</title>

    <!-- Scripts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/sass/app.scss', 'resources/css/layout.css', 'node_modules/material-dashboard/assets/css/material-dashboard.css', 'node_modules/material-dashboard/assets/js/material-dashboard.js'])
</head>
<body class="bg-gray-100 flex d-flex flex-column min-vh-100">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Contenido principal -->
    <div class="flex-grow-1 d-flex flex-column">
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Contenido -->
        <div class="flex-grow-1 flex p-6">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer', ['condominiumName' => 'Condominio Las Palmas'])
</body>
</html>
