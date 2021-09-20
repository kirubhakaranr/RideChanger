   <!-- BEGIN: Main Menu-->
        <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="#">
                            <span class="brand-logo"></span>
                            <h2 class="brand-text">{{ env('APP_NAME') }}</h2>
                        </a>
                    </li>
                    <li class="nav-item nav-toggle">
                        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                            <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc" data-ticon="disc"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="#"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span></a>
                    </li>
                    <li class="navigation-header"><span data-i18n="Fast-Parity">Fast-Parity</span><i data-feather="more-horizontal"></i></li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="#"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Settings">Fast-Parity</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center" href="{{ route('admin.fast-parity.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="General">Setting</span></a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="General">App Banner</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="navigation-header"><span data-i18n="Users">Users</span><i data-feather="more-horizontal"></i></li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="#"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Settings">Users</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center" href="{{ route('admin.users.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="General">Users</span></a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="General">Wallet</span></a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- END: Main Menu-->
