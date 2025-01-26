<aside class="sidenav sidebar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
        <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=308,fit=crop,q=95/AR02GzlpQOI56L5n/adamar-marevna-mnl6e21LkQUEPJw1.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">condoctl</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          @can('view_dashboard')
          <li class="nav-item">
            <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active btn-primary' : '' }}" href="{{ route('dashboard') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">dashboard</span>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          @endcan
          @can('manage_config')
          <li class="nav-item">
            <a class="nav-link text-white {{ request()->routeIs('config.index') ? 'active btn-primary' : '' }}" href="{{ route('config.index') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">tune</span>
              </div>
              <span class="nav-link-text ms-1">System Config</span>
            </a>
          </li>
          @endcan
        </ul>
      </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn text-white btn-primary mt-4 w-100" href="#" type="button">Reglamento</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
