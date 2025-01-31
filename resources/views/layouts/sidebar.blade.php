<div class="pf-v6-c-sidebar" id="sidebar" tabindex="0">
    <nav class="pf-v6-c-nav" aria-label="Global">
        <!-- Primera sección: Administración Del Condominio -->
        <section class="pf-v6-c-nav__section" aria-labelledby="grouped-title1">
            <h2 class="pf-v6-c-nav__section-title" id="grouped-title1">
                <span class="material-symbols-outlined menu-icon">
                    business
                </span>
                <span class="section-title-text">Administración</span>
            </h2>
            <ul class="pf-v6-c-nav__list" role="list">
                @can('view_dashboard')
                <li class="pf-v6-c-nav__item">
                    <a href="{{ route('dashboard') }}" class="pf-v6-c-nav__link {{ request()->routeIs('dashboard') ? 'pf-m-current' : '' }}">
                        <span class="pf-v6-c-nav__link-icon">
                            <span class="material-symbols-outlined">dashboard</span>
                        </span>
                        <span class="pf-v6-c-nav__link-text">Dashboard</span>
                    </a>
                </li>
                @endcan
                @can('manage_users')
                <li class="pf-v6-c-nav__item">
                    <a href="{{ route('users.index') }}" class="pf-v6-c-nav__link {{ request()->routeIs('users.index') ? 'pf-m-current' : '' }}">
                        <span class="pf-v6-c-nav__link-icon">
                            <span class="material-symbols-outlined">group</span>
                        </span>
                        <span class="pf-v6-c-nav__link-text">Usuarios</span>
                    </a>
                </li>
                @endcan
                @can('manage_config')
                <li class="pf-v6-c-nav__item">
                    <a href="{{ route('audit-logs.index') }}" class="pf-v6-c-nav__link {{ request()->routeIs('audit-logs.index') ? 'pf-m-current' : '' }}">
                        <span class="pf-v6-c-nav__link-icon">
                            <span class="material-symbols-outlined">assignment</span>
                        </span>
                        <span class="pf-v6-c-nav__link-text">Auditoría</span>
                    </a>
                </li>
                @endcan
                @can('manage_config')
                <li class="pf-v6-c-nav__item">
                    <a href="{{ route('config.index') }}" class="pf-v6-c-nav__link {{ request()->routeIs('config.index') ? 'pf-m-current' : '' }}">
                        <span class="pf-v6-c-nav__link-icon">
                            <span class="material-symbols-outlined">settings</span>
                        </span>
                        <span class="pf-v6-c-nav__link-text">Configuración del Sistema</span>
                    </a>
                </li>
                @endcan
            </ul>
        </section>
        <!-- Segunda sección: Sitio Web y Reglamento -->
        <section class="pf-v6-c-nav__section pf-v6-c-nav__section-bottom" aria-labelledby="grouped-title2">
            <h2 class="pf-v6-c-nav__section-title" id="grouped-title2">
                <span class="material-symbols-outlined menu-icon">
                    public
                </span>
                <span class="section-title-text">Sitio Web y Reglamento</span>
            </h2>
            <ul class="pf-v6-c-nav__list" role="list">
                <li class="pf-v6-c-nav__item">
                    <a href="#" class="pf-v6-c-nav__link">
                        <span class="pf-v6-c-nav__link-icon">
                            <span class="material-symbols-outlined">web</span>
                        </span>
                        <span class="pf-v6-c-nav__link-text">Sitio Web</span>
                    </a>
                </li>
                <li class="pf-v6-c-nav__item">
                    <a href="#" class="pf-v6-c-nav__link">
                        <span class="pf-v6-c-nav__link-icon">
                            <span class="material-symbols-outlined">rule</span>
                        </span>
                        <span class="pf-v6-c-nav__link-text">Reglamento</span>
                    </a>
                </li>
            </ul>
        </section>
    </nav>
</div>
