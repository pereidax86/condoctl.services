<aside class="sidebar navbar-vertical navbar-expand-xs border-0" id="sidenav-main">
    <div class="sidenav-header">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=308,fit=crop,q=95/AR02GzlpQOI56L5n/adamar-marevna-mnl6e21LkQUEPJw1.png" class="navbar-brand-img" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @can('view_dashboard')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'text-white active btn-primary' : '' }}" href="{{ route('dashboard') }}">
                    <div class="{{ request()->routeIs('dashboard') ? 'text-white' : '' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-symbols-outlined">dashboard</span>
                    </div>
                    <span class="{{ request()->routeIs('dashboard') ? 'text-white' : '' }} nav-link-text ms-1 d-none d-xl-inline">Inicio</span>
                </a>
            </li>
            @endcan
            @can('manage_users')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('users.index') ? 'text-white active btn-primary' : '' }}" href="{{ route('users.index') }}">
                    <div class="{{ request()->routeIs('users.index') ? 'text-white' : '' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-symbols-outlined">group</span>
                    </div>
                    <span class="{{ request()->routeIs('users.index') ? 'text-white' : '' }} nav-link-text ms-1 d-none d-xl-inline">Usuarios y Roles</span>
                </a>
            </li>
            @endcan
            @can('manage_config')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('audit-logs.index') ? 'text-white active btn-primary' : '' }}" href="{{ route('audit-logs.index') }}">
                    <div class="{{ request()->routeIs('audit-logs.index') ? 'text-white' : '' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-symbols-outlined">supervisor_account</span>
                    </div>
                    <span class="{{ request()->routeIs('audit-logs.index') ? 'text-white' : '' }} nav-link-text ms-1 d-none d-xl-inline">Auditoria Usuarios</span>
                </a>
            </li>
            @endcan
            @can('manage_config')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('config.index') ? 'text-white active btn-primary' : '' }}" href="{{ route('config.index') }}">
                    <div class="{{ request()->routeIs('config.index') ? 'text-white' : '' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-symbols-outlined">tune</span>
                    </div>
                    <span class="{{ request()->routeIs('config.index') ? 'text-white' : '' }} nav-link-text ms-1 d-none d-xl-inline">Configuracion Sistema</span>
                </a>
            </li>
            @endcan
        </ul>
    </div>

    <div class="sidenav-footer position-absolute w-100 bottom-0">
        <div class="navbar-nav">
            <a class="nav-link text-white active btn-primary" href="#">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <span class="material-symbols-outlined">book</span>
                    <span class="nav-link-text ms-1 d-none d-xl-inline">Reglamento</span>
                </div>
            </a>
        </div>
        <div class="navbar-nav">
            <a class="nav-link text-white active btn-primary" href="#">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <span class="material-symbols-outlined">public</span>
                    <span class="nav-link-text ms-1 d-none d-xl-inline">Sitio Web</span>
                </div>
            </a>
        </div>
        <div class="navbar-nav">
            <a class="nav-link text-white active btn-primary" href="#" id="toggleSidebar">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <span class="material-symbols-outlined" id="toggleIcon">arrow_menu_close</span>
                    <span class="nav-link-text ms-1 d-none d-xl-inline">Esconder</span>
                </div>
            </a>
        </div>
    </div>
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
