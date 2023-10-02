<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ Request::is('admin/dashboard') ? 'active':'' }}" >
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/users*') ? 'active':'' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#users" 
                                aria-expanded="{{ Request::is('admin/users*') ? 'true':'false' }}" >
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is('admin/users') ? 'show':'' }}" id="users">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link {{ Request::is('admin/users') || Request::is('admin/users/*/edit')  ? 'active':'' }}" href="{{ url('admin/users') }}">Danh Sách User</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link {{ Request::is('admin/users/create') ? 'active':'' }}" href="{{ url('admin/users/create') }}">Thêm User</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is('admin/category*') ? 'active':'' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#category" 
                                aria-expanded="{{ Request::is('admin/category*') ? 'true':'false' }}">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Danh Mục</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is('admin/category') ? 'show':'' }}" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                         <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/category/*/edit')  ? 'active':'' }}" href="{{ url('admin/category') }}">Danh Sách Danh Mục</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link {{ Request::is('admin/category/create') ? 'active':'' }}" href="{{ url('admin/category/create') }}">Thêm Danh Mục</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is('admin/brand*') ? 'active':'' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#brand" 
                                aria-expanded="{{ Request::is('admin/brand*') ? 'true':'false' }}" >
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Nhãn Hiệu</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is('admin/brand') ? 'show':'' }}" id="brand">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link {{ Request::is('admin/brand') || Request::is('admin/brand/*/edit')  ? 'active':'' }}" href="{{ url('admin/brand') }}">Danh Sách Nhãn Hiệu</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link {{ Request::is('admin/brand/create') ? 'active':'' }}" href="{{ url('admin/brand/create') }}">Thêm Nhãn Hiệu</a>
                        </li>
                </ul>
            </div>
        </li>
        
        <li class="nav-item nav-item {{ Request::is('admin/product*') ? 'active':'' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#products" 
                                aria-expanded="{{ Request::is('admin/products*') ? 'true':'false' }}" >
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Sản Phẩm</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is('admin/products') ? 'show':'' }}" id="products">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link {{ Request::is('admin/products') || Request::is('admin/products/*/edit')  ? 'active':'' }}" href="{{ url('admin/products') }}">Danh Sách Sản Phẩm</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link {{ Request::is('admin/products/create') ? 'active':'' }}" href="{{ url('admin/products/create') }}">Thêm Sản Phẩm</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item {{ Request::is('admin/colors') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('admin/colors') }}">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Màu Sắc</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/sliders') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('admin/sliders') }}">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Slider Banner</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/orders') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('admin/orders') }}">
                <i class="mdi mdi-sale menu-icon"></i>
                <span class="menu-title">Đơn Hàng</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/settings') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('admin/settings') }}">
                <i class="mdi mdi-settings menu-icon"></i>
                <span class="menu-title">Cài Đặt</span>
            </a>
        </li>
    </ul>
</nav>
