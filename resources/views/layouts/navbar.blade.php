<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
    id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm">
                    <a class="opacity-3 text-dark" href="javascript:;">
                        <span class="material-symbols-outlined">dashboard</span>
                        <title>shop </title>
                        </svg>
                    </a>
                </li>
                <!-- Título de la Sección -->
                <h1 class="text-lg font-bold">@yield('section-title', 'condoctl.services')</h1>

                @if (Auth::check())
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                        </div>
                        <div class="ms-md-auto pe-md-3 d-flex aling-items-center">
                            <!-- Icono de Notificaciones -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                    <i class="material-symbols-outlined">notifications</i>
                                </a>
                            </div>

                            <!-- Menú del Usuario -->
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                                        <i class="material-symbols-outlined">account_circle</i><span>{{ Auth::user()->name }}</span></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="material-symbols-outlined">Manage_Accounts</i> Salir</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="material-symbols-outlined">logout</i> Salir</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
            </ol>
        </nav>
        @endif
    </div>
</nav>
