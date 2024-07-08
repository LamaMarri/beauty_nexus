
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="mt-4 mb-1 text-center">

                       <p class="text-white">   <i class="fa fa-user text-white"></i> <strong> Welcome, Administrator</strong></p>
                    </li>
                    <li class="{{ request()->is('dashboard/home*') ? 'active' : '' }}">
                        <a href="{{route('dashboard.home')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">System General</li><!-- /.menu-title -->

                    <li class="{{ request()->is('dashboard/service_categories*') ? 'active' : '' }}">
                        <a href="{{route('dashboard.service_categories.index')}}"><i class="menu-icon fa fa-database"></i>Service Categories </a>
                    </li>
                    <li class="{{ request()->is('dashboard/dashboard*') ? 'active' : '' }}">
                        <a href="{{route('dashboard.home')}}"><i class="menu-icon fa fa-table"></i>Packages </a>
                    </li>
                    <li class="menu-title">Users</li><!-- /.menu-title -->
                    <li class="{{ request()->is('dashboard/service_providers*') ? 'active' : '' }}">
                        <a href="{{route('dashboard.service_providers.index')}}"><i class="menu-icon fa fa-group"></i>Service Provider </a>
                    </li>
                    <li class="{{ request()->is('dashboard/customers*') ? 'active' : '' }}">
                        <a href="{{route('dashboard.customers.index')}}"><i class="menu-icon fa fa-user"></i>Customer </a>
                    </li>

                    <li class="menu-title">User Transactions</li><!-- /.menu-title -->
                    <li class="{{ request()->is('dashboard/dashboard*') ? 'active' : '' }}">
                        <a href="{{route('dashboard.home')}}"><i class="menu-icon fa fa-credit-card"></i>Subscription </a>
                    </li>
                    <li class="{{ request()->is('dashboard/dashboard*') ? 'active' : '' }}">
                        <a href="{{route('dashboard.home')}}"><i class="menu-icon fa fa-file"></i>Booking </a>
                    </li>
                    <li class="{{ request()->is('dashboard/dashboard*') ? 'active' : '' }}">
                        <a href="{{route('dashboard.home')}}"><i class="menu-icon fa fa-star"></i>Reviews </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
