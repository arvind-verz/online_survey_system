<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="@if(strpos(Route::currentRouteName(), 'admin.home') !== false) active @endif">
                <a href="{{ url('/admin/home') }}">
                    <i class="fa fa-dashboard">
                    </i>
                    <span>
                        @php //if(strpos(Route::currentRouteName(), 'admin.home'  )!==false) {echo 'a';}else {echo 'b';} @endphp
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="treeview @if((strpos(Route::currentRouteAction(), 'DepartmentController@users') || strpos(Route::currentRouteAction(), 'DepartmentController@create_users') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_users') || strpos(Route::currentRouteAction(), 'DepartmentController@customers') || strpos(Route::currentRouteAction(), 'DepartmentController@create_customers') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_customers') || strpos(Route::currentRouteAction(), 'DepartmentController@survey') || strpos(Route::currentRouteAction(), 'DepartmentController@view_survey') !== false) && (Route::current()->parameters['department']=='sales' || Route::current()->parameters['department']=='operations')) active menu-open @endif">
                <a href="#">
                    <i aria-hidden="true" class="fa fa-building">
                    </i>
                    <span>
                        Manage Department
                    </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right">
                        </i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview @if((strpos(Route::currentRouteAction(), 'DepartmentController@users') || strpos(Route::currentRouteAction(), 'DepartmentController@create_users') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_users') || strpos(Route::currentRouteAction(), 'DepartmentController@customers') || strpos(Route::currentRouteAction(), 'DepartmentController@create_customers') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_customers') || strpos(Route::currentRouteAction(), 'DepartmentController@survey') || strpos(Route::currentRouteAction(), 'DepartmentController@view_survey') !== false) && (Route::current()->parameters['department']=='sales')) active menu-open @endif">
                        <a href="#">
                            <i class="fa fa-circle-o">
                            </i>
                            Sales
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right">
                                </i>
                            </span>
                        </a>
                        <ul class="treeview-menu ">
                            <li class="@if((strpos(Route::currentRouteAction(), 'DepartmentController@users') || strpos(Route::currentRouteAction(), 'DepartmentController@create_users') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_users') !== false) && (Route::current()->parameters['department']=='sales')) active menu-open @endif">
                                <a href="{{ url('admin/sales/users') }}">
                                    <i aria-hidden="true" class="fa fa-user-plus">
                                    </i>
                                    Users
                                </a>
                            </li>
                            <li class="@if((strpos(Route::currentRouteAction(), 'DepartmentController@customers') || strpos(Route::currentRouteAction(), 'DepartmentController@create_customers') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_customers') !== false) && (Route::current()->parameters['department']=='sales')) active @endif">
                                <a href="{{ url('admin/sales/customers') }}">
                                    <i aria-hidden="true" class="fa fa-users">
                                    </i>
                                    Customers
                                </a>
                            </li>
                            <li class="@if((strpos(Route::currentRouteAction(), 'DepartmentController@survey') || strpos(Route::currentRouteAction(), 'DepartmentController@view_survey') !== false) && (Route::current()->parameters['department']=='sales')) active @endif">
                                <a href="{{ url('admin/sales/survey') }}">
                                    <i aria-hidden="true" class="fa fa-flag">
                                    </i>
                                    Survey
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview @if((strpos(Route::currentRouteAction(), 'DepartmentController@users') || strpos(Route::currentRouteAction(), 'DepartmentController@create_users') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_users') || strpos(Route::currentRouteAction(), 'DepartmentController@customers') || strpos(Route::currentRouteAction(), 'DepartmentController@create_customers') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_customers') || strpos(Route::currentRouteAction(), 'DepartmentController@survey') || strpos(Route::currentRouteAction(), 'DepartmentController@view_survey') !== false) && (Route::current()->parameters['department']=='operations')) active menu-open @endif">
                        <a href="#">
                            <i class="fa fa-circle-o">
                            </i>
                            Operations
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right">
                                </i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="@if((strpos(Route::currentRouteAction(), 'DepartmentController@users') || strpos(Route::currentRouteAction(), 'DepartmentController@create_users') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_users') !== false) && (Route::current()->parameters['department']=='operations')) active menu-open @endif">
                                <a href="{{ url('admin/operations/users') }}">
                                    <i aria-hidden="true" class="fa fa-user-plus">
                                    </i>
                                    Users
                                </a>
                            </li>
                            <li class="@if((strpos(Route::currentRouteAction(), 'DepartmentController@customers') || strpos(Route::currentRouteAction(), 'DepartmentController@create_customers') || strpos(Route::currentRouteAction(), 'DepartmentController@edit_customers') !== false) && (Route::current()->parameters['department']=='operations')) active @endif">
                                <a href="{{ url('admin/operations/customers') }}">
                                    <i aria-hidden="true" class="fa fa-users">
                                    </i>
                                    Customers
                                </a>
                            </li>
                            <li class="@if((strpos(Route::currentRouteAction(), 'DepartmentController@survey') || strpos(Route::currentRouteAction(), 'DepartmentController@view_survey') !== false) && (Route::current()->parameters['department']=='operations')) active @endif">
                                <a href="{{ url('admin/operations/survey') }}">
                                    <i aria-hidden="true" class="fa fa-flag">
                                    </i>
                                    Survey
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <li class="@if(strpos(Route::currentRouteName(), 'admin.roles-and-permission') !== false) active @endif">
                    <a href="{{ url('/admin/roles-and-permission') }}">
                        <i class="fa fa-user">
                        </i>
                        <span>
                            Roles & Permission
                        </span>
                    </a>
                </li>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>