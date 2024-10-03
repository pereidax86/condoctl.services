<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.condo_name') }} - {{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts (Laravel Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
</head>

<body>


        <!-- Sidebar (Barra Lateral) -->
        <div id="sidebar" class="sidebar">
            <button id="toggleSidebar" class="sidebar-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="sidebar-menu">
                <!-- Enlaces de la barra lateral -->
                @can('view incomes')
                    <li><a href="{{ route('incomes.index') }}"><i class="fas fa-dollar-sign"></i><span class="menu-text">Ingresos</span></a></li>
                @endcan
                @can('view expenses')
                    <li><a href="{{ route('expenses.index') }}"><i class="fas fa-receipt"></i><span class="menu-text">Egresos</span></a></li>
                @endcan
                @can('view financial states')
                    <li><a href="{{ route('financial_states.index') }}"><i class="fas fa-balance-scale"></i><span class="menu-text">Estados Financieros</span></a></li>
                @endcan
                @can('manage users')
                    <li><a href="{{ route('users.index') }}"><i class="fas fa-users-cog"></i><span class="menu-text">Usuarios y Roles</span></a></li>
                @endcan
                </ul>
        </div>

        
    <div id="app" class="d-flex">

        

<!-- Contenido principal -->
<div class="content flex-grow-1">
            <!-- Navbar superior -->
            <nav class="navbar">
                <div class="navbar-container">
                    <!-- Nombre del Condominio -->
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        {{ config('app.condo_name') }}
                    </a>

                    <!-- Bienvenida y botón de cerrar sesión -->
                    <div class="navbar-right">
                        <span class="welcome-message">
                            Bienvenido {{ Auth::user()->name }} a {{ config('app.condo_name') }}
                        </span>
                        <form method="POST" action="{{ route('logout') }}" class="logout-form">
                            @csrf
                            <button type="submit" class="logout-button">
                                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            

    <!-- Script para el manejo de compactación/expansión del sidebar -->
    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function () {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('compact');
        });
    </script>
</body>
</html>
