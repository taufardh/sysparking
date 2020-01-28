<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/parkir-masuk" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        </div>
    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            
            <li class="nav-item">
                <a href="/parkir-masuk" class="nav-link {{ (request()->segment(1) == 'parkir-masuk') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-sign-in-alt"></i>
                    <p>
                    Masuk
                    <!--<i class="right fas fa-angle-left"></i>-->
                    <!--<span class="right badge badge-danger">New</span>-->  
                    </p>
                </a>
                </li>
            <li class="nav-item">
            <a href="/parkirs" class="nav-link {{ (request()->segment(1) == 'parkirs') ? 'active' : '' }}">
                <i class="nav-icon fas fa-database"></i>
                <p>
                View Data Parkir
                <!--<i class="right fas fa-angle-left"></i>-->
                <!--<span class="right badge badge-danger">New</span>-->  
                </p>
            </a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link {{ (request()->segment(4) == 'edit') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                    Keluar
                    <!--<i class="right fas fa-angle-left"></i>-->
                    <!--<span class="right badge badge-danger">New</span>-->  
                    </p>
                </a>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>