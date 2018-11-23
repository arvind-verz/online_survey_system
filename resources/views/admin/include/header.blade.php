<header class="main-header">
    <!-- Logo -->
    <a class="logo" href="{{ url('/admin/home') }}">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            Survey Panel
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            Survey Panel
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a class="sidebar-toggle" data-toggle="push-menu" href="#" role="button">
            <span class="sr-only">
                Toggle navigation
            </span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->
                <!-- <li class="dropdown notifications-menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell-o">
                        </i>
                        <span class="label label-warning">
                            10
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">
                            You have 10 notifications
                        </li>
                        <li>
                            inner menu: contains the actual data
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua">
                                        </i>
                                        5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow">
                                        </i>
                                        Very long description here that may not fit into the
                      page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red">
                                        </i>
                                        5 new members joined
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green">
                                        </i>
                                        25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red">
                                        </i>
                                        You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">
                                View all
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img alt="User Image" class="user-image" src="http://via.placeholder.com/160x160">
                            <span class="hidden-xs">
                                {{ Auth::user()->name }}
                            </span>
                        </img>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img alt="User Image" class="img-circle" src="http://via.placeholder.com/160x160">
                                <p>
                                    {{ Auth::user()->name }}
                                </p>
                            </img>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a class="btn btn-default btn-flat" href="{{ url('/admin/profile') }}">
                                    Profile
                                </a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Sign out') }}
                                </a>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a data-toggle="control-sidebar" href="#">
                        <i class="fa fa-gears">
                        </i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>