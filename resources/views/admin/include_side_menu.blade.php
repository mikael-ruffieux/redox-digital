<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="/home">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="https://google.com" target="_blank">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Google Analytics <i class="fas fa-external-link-alt fa-xs"></i>
                    </a>
                </li>
                <hr>
                <li class="app-sidebar__heading">Utilisateurs</li>
                <li>
                    <a href="{{route("users.index")}}">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Tous les utilisateurs
                    </a>
                </li>
                <li>
                    <a href='{{route("users.create")}}' ">
                        <i class="metismenu-icon pe-7s-eyedropper">
                        </i>Ajouter un utilisateur
                    </a>
                </li>
                <hr>
                <li class="app-sidebar__heading">Projets</li>
                <li>
                    <a href="{{route("projects.index")}}">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Tous les projets
                    </a>
                </li>
                <li>
                    <a href='{{route("projects.create")}}' ">
                        <i class="metismenu-icon pe-7s-eyedropper">
                        </i>Ajouter un projet
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{route("categories.index")}}">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Toutes les catégories
                    </a>
                </li>
                <li>
                    <a href='{{route("categories.create")}}' ">
                        <i class="metismenu-icon pe-7s-eyedropper">
                        </i>Ajouter une catégorie
                    </a>
                </li>
                <!--<li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Elements
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="elements-buttons-standard.html">
                                <i class="metismenu-icon"></i>
                                Buttons
                            </a>
                        </li>
                        <li>
                            <a href="elements-dropdowns.html">
                                <i class="metismenu-icon">
                                </i>Dropdowns
                            </a>
                        </li>
                        <li>
                    </ul>
                </li>-->
            </ul>
        </div>
    </div>
</div>