<header class="pf-v6-c-masthead" id="basic-masthead">
    <div class="pf-v6-c-masthead__main">
        <span class="pf-v6-c-masthead__toggle">
            <button class="pf-v6-c-button pf-m-plain" id="toggleSidebarButton" type="button" aria-label="Global navigation">
                <span class="pf-v6-c-button__icon">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </span>
            </button>
        </span>
        <div class="pf-v6-c-masthead__brand">
            <a class="pf-v6-c-masthead__logo" href="#">
                <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=308,fit=crop,q=95/AR02GzlpQOI56L5n/adamar-marevna-mnl6e21LkQUEPJw1.png"
                    class="pf-v6-c-masthead__brand-logo" alt="main_logo">
            </a>
        </div>
    </div>
    <div class="pf-v6-c-masthead__content" style="display: flex; justify-content: flex-end; width: 100%;">
        @if (Auth::check())
            <div class="pf-v6-c-dropdown pf-m-plain" style="position: relative; margin-left: auto;">
                <button class="pf-v6-c-button pf-m-plain" type="button" id="notification-dropdown-button" aria-expanded="false">
                    <span class="pf-v6-c-notification-badge" aria-label="Notifications">
                        <i class="fas fa-bell"></i>
                        <span class="pf-v6-c-notification-badge__count">3</span>
                    </span>
                </button>
                <div class="pf-v6-c-menu" id="notification-menu" style="position: absolute; top: 100%; right: 0; display: none;">
                    <div class="pf-v6-c-menu__content">
                        <ul class="pf-v6-c-menu__list" role="menu">
                            <li class="pf-v6-c-menu__list-item" role="none">
                                <a class="pf-v6-c-menu__item" href="#" role="menuitem">
                                    <span class="pf-v6-c-menu__item-main">
                                        <span class="pf-v6-c-menu__item-text">Example of notification</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pf-v6-c-dropdown pf-m-plain" style="position: relative; margin-left: 10px;">
                <button class="pf-v6-c-button pf-m-plain" type="button" id="user-dropdown-button" aria-expanded="false">
                    <span class="pf-v6-c-notification-badge" aria-label="User">
                        <img class="pf-v6-c-avatar pf-m-bordered" alt="Avatar image" src="/assets/images/img_avatar-light.svg" />
                        <span class="pf-v6-c-notification-badge__count">{{ Auth::user()->name }}</span>
                    </span>
                </button>
                <div class="pf-v6-c-menu" id="user-menu" style="position: absolute; top: 100%; right: 0; display: none;">
                    <div class="pf-v6-c-menu__content">
                        <ul class="pf-v6-c-menu__list" role="menu">
                            <li class="pf-v6-c-menu__list-item" role="none">
                                <a class="pf-v6-c-menu__item" href="#" role="menuitem">
                                    <span class="pf-v6-c-menu__item-main">
                                        <span class="pf-v6-c-menu__item-text">Mi cuenta</span>
                                    </span>
                                </a>
                            </li>
                            <li class="pf-v6-c-menu__list-item" role="none">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="pf-v6-c-menu__item" type="submit" role="menuitem">
                                        Salir
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>
</header>
