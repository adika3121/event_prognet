<!-- header header  -->
<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <!-- Logo icon -->
                <!-- Logo icon -->
                
                <b><span style="color: #fff" class="fa fa-calendar"></span></b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span style="color: #fff">EVENT BAGUS</span>
            </a>
        </div>
        <!-- End Logo -->
        <div class="navbar-collapse">
            <!-- toggle and nav items -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            </ul>
            <!-- User profile and search -->
            <ul class="navbar-nav my-lg-0">

                <!-- Search -->
                <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i style="color: #333" class="ti-close"></i></a> </form>
                </li>
                <!-- End Comment -->
                <!-- Profile -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-img-profile" style="background-image: url({{ asset('img/user/'.Auth::user()->img_profile) }})"></div>
                        {{ Auth::user()->name }}
                        <span style="margin-left: 4px" class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                        <ul class="dropdown-user">
                            <li><a href="/admin/change_password"><i class="ti-key"></i> Ganti Password</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- End header header -->