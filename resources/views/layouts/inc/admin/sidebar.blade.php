<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="#"><h3>Admin Dashboard</h3></a>
      <a class="sidebar-brand brand-logo-mini" href="#"><h6>Admin Dashboard</h6></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="profile-name">
              <h6>Current Admin: </h6><h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items {{ Request::is('admin/dashboard') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ Request::is('admin/category*') ? 'active':'' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#category" 
        aria-expanded="{{ Request::is('admin/category*') ? 'true':'false' }}">
          <span class="menu-icon">
            <i class="mdi mdi-format-list-bulleted"></i>
          </span>
          <span class="menu-title">Categories</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ Request::is('admin/category*') ? 'show':'' }}" id="category">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> 
              <a class="nav-link {{ Request::is('admin/category/create') ? 'active':'' }}" href="{{ url('/admin/category/create') }}">Add category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/category/*/edit') ? 'active':'' }}" href="{{ url('/admin/category') }}">View Categories</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items {{ Request::is('admin/products*') ? 'active':'' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#products" 
        aria-expanded="{{ Request::is('admin/products*') ? 'true':'false' }}">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ Request::is('admin/products*') ? 'show':'' }}" id="products">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> 
              <a class="nav-link {{ Request::is('admin/products/create') ? 'active':'' }}" href="{{ url('admin/products/create') }}">Add Product</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link {{ Request::is('admin/products') || Request::is('admin/products/*/edit') ? 'active':'' }}" href="{{ url('admin/products') }}">View Products</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items {{ Request::is('admin/users*') ? 'active':'' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#users" 
        aria-expanded="{{ Request::is('admin/users*') ? 'true':'false' }}">
          <span class="menu-icon">
            <i class="mdi mdi-account-circle"></i>
          </span>
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ Request::is('admin/users*') ? 'show':'' }}" id="users">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('admin/users/create') ? 'active':'' }}" href="{{ url('admin/users/create') }}">Add User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('admin/users') || Request::is('admin/users/*/edit') ? 'active':'' }}" href="{{ url('admin/users') }}">View Users</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item menu-items {{ Request::is('admin/brands') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('admin/brands') }}">
          <span class="menu-icon">
            <i class="mdi mdi-watermark"></i>
          </span>
          <span class="menu-title">Brands</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ Request::is('/admin/colors') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('/admin/colors') }}">
          <span class="menu-icon">
            <i class="mdi mdi-palette"></i>
          </span>
          <span class="menu-title">Colors</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ Request::is('admin/orders') ? 'active':'' }}">
        <a class="nav-link" href="{{url('admin/orders')}}">
          <span class="menu-icon">
            <i class="mdi mdi-cart"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ Request::is('admin/sliders') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('admin/sliders') }}">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Home Slider</span>
        </a>
      </li>
       <li class="nav-item menu-items {{ Request::is('admin/settings') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('admin/settings') }}">
          <span class="menu-icon">
            <i class="mdi mdi-account-circle"></i>
          </span>
          <span class="menu-title">Site Setting</span>
        </a>
      </li>
    </ul>
  </nav>