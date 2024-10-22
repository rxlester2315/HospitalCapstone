<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('sadview') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>


        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item active">
                    <a href="{{ route('sadview') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">


                            @if (Auth::user()->role_name=='Super Admin')
                            <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role Name:</span>
                            <span class="badge bg-success">Super Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Normal User')
                            <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role Name:</span>
                            <span class="badge bg-warning">User Normal</span>
                            @endif
                        </div>
                    </div>
                </li>

                <!-- <li class="sidebar-item">
                    <a href="" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Changes Password</span>
                    </a>
                </li> -->

                @if (Auth::user()->role_name=='Super Admin')
                <li class="sidebar-title">Page &amp; Controller</li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Control</span>
                    </a>
                    <ul class="submenu active">
                        <li class="submenu-item active">
                            <a href="{{ route('userManagement') }}">User Control</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/log') }}">User Activity Log</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/login/logout') }}">User Logins</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('archives-restore') }}">Restore Users</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('listin.personate') }}">Inpersonate Accounts</a>
                        </li>

                        <li class="submenu-item">
                            <a href="{{ url('updates_system') }}">Updates System</a>
                        </li>
                    </ul>


                </li>

                @endif



                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>