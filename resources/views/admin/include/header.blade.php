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
                <li class="dropdown notifications-menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell-o">
                        </i>
                        <span class="label label-warning">
                            {{ get_survey_notification_count(Auth::user()->unique_id) }}
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">
                            You have {{ get_survey_notification_count(Auth::user()->unique_id) }} notifications
                        </li>
                        <li>
                            <ul class="menu">
                                @php
                                $notifications = get_survey_notification_list(Auth::user()->unique_id);
                                @endphp
                                @if($notifications)
                                @foreach($notifications as $notification)
                                <li>
                                    <a href="#" class="read_notification">
                                        <i class="fa fa-flag text-aqua">
                                        </i>
                                        {{ get_survey_notification_by_survey_id($notification->survey_id) }}
                                    </a>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="{{ url('admin/all-notifications') }}">
                                View all
                            </a>
                        </li>
                    </ul>
                </li>
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
                                <p>
                                    {{ get_admin_type(Auth::user()->is_admin) }}
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