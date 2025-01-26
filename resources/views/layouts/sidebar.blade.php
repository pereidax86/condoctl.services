<aside class="sidenav sidebar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer opacity-5 position-absolute end-0 top-0 d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=308,fit=crop,q=95/AR02GzlpQOI56L5n/adamar-marevna-mnl6e21LkQUEPJw1.png" class="navbar-brand-img h-100" alt="main_logo">
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
                    <span class="nav-link-text ms-1 d-none d-xl-inline">Dashboard</span>
                </a>
            </li>
            @endcan
            @can('manage_config')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('config.index') ? 'text-white active btn-primary' : '' }}" href="{{ route('config.index') }}">
                    <div class="{{ request()->routeIs('config.index') ? 'text-white' : '' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-symbols-outlined">tune</span>
                    </div>
                    <span class="nav-link-text ms-1 d-none d-xl-inline">System Config</span>
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
