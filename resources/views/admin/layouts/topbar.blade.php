 <!-- BEGIN: Header-->
 <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>
            {{-- <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Calls"><i class="ficon" data-feather="briefcase"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Users"><i class="ficon" data-feather="users"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Subscription"><i class="ficon text-warning" data-feather="shopping-bag"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Scripts"><i class="ficon" data-feather="layers"></i></a>
                </li>
            </ul> --}}
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            {{-- <li class="nav-item dropdown dropdown-language">
                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag">
                    <a class="dropdown-item" href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="ta"><i class="flag-icon flag-icon-in"></i> Tamil</a>
                </div>
            </li> --}}
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a>
            </li>
            {{-- <li class="nav-item nav-search">
                <a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Invest In Shares..." tabindex="-1" data-search="search" />
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li> --}}

            {{-- <li class="nav-item dropdown dropdown-notification mr-25">
                <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">3</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                            <div class="badge badge-pill badge-light-primary">3 New</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list">
                        <a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img src="{{ asset('app-assets/images/portrait/small/avatar-s-15.jpg') }}" alt="avatar" width="32" height="32" /></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p>
                                    <small class="notification-text"> Won the monthly best seller badge.</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img src="{{ asset('app-assets/images/portrait/small/avatar-s-3.jpg') }}" alt="avatar" width="32" height="32" /></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p>
                                    <small class="notification-text"> You have 10 unread messages</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">MD</div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Revised Order 👋</span>&nbsp;checkout</p>
                                    <small class="notification-text"> MD Inc. order updated</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
            </li> --}}
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name font-weight-bolder">{{ Str::ucfirst(Auth::guard('admin')->user()->name) }}</span>
                        <span class="user-status">Admin</span>
                    </div>
                    <span class="avatar">
                        <img class="round" src="{{ asset('app-assets/images/admin-1.png') }}" alt="avatar" height="40" width="40" />
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="#"><i class="mr-50" data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mr-50" data-feather="settings"></i> Settings</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="mr-50" data-feather="power"></i> Logout</a>
                    <form id="logout-form" action="{{ route('admin.logout')  }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Header-->
