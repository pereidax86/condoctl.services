<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3 d-flex justify-content-between align-items-center">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="javascript:;">
                            <span class="material-symbols-outlined">dashboard</span>
                        </a>
                    </li>
                    <!-- Título de la Sección -- A la Izquierda -->
                    <li class="breadcrumb-item text-lg font-bold">@yield('section-title', 'condoctl.services')</li>
                </ol>
            </nav>
        </div>

        @if (Auth::check())
        <!-- User Zone -- Right side -->
        <div class="d-flex align-items-center">
            <!-- notifications -->
            <div class="dropdown me-3">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                    <i class="material-symbols-outlined">notifications</i>
                </a>
            </div>

            <!-- user menu -->
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                    <i class="material-symbols-outlined">account_circle</i><span>{{ Auth::user()->name }}</span></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <li><a class="dropdown-item" href="#"><i class="material-symbols-outlined">Manage_Accounts</i> Mi cuenta</a></li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="material-symbols-outlined">logout</i>Salir</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        @endif
    </div>
</nav>
