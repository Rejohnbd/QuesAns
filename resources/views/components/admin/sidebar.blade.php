<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin-dashboard') }}" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Emp Mgr</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin-dashboard') }}" class="nav-link @if(Request::is('admin-dashboard')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Settings</li>
                <li class="nav-item  @if(Request::is('user-roles') || Request::is('designations*')) menu-is-opening menu-open @endif">
                    <a href="#" class="nav-link @if(Request::is('user-roles') || Request::is('designations*')) active @endif">
                        <i class="nav-icon fa-solid fa-gear"></i>
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user-roles') }}" class="nav-link @if(Request::is('user-roles')) active @endif">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p class="text">User Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('designations.index') }}" class="nav-link @if(Request::is('designations*')) active @endif">
                                <i class="nav-icon far fa-circle text-success"></i>
                                <p>Designation</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>