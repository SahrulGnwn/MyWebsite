<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth()->user()->name }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item"> <!--- Dashboard -->
            <a href=" {{ route('dashboard') }} " class="nav-link {{ Request::routeIs('dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>
          <li class="nav-item"> <!--- API External -->
            <a href="#" class="nav-link {{ Request::routeIs('external.api*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-asterisk"></i>              
              <p>
                API External
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('external.api.covid') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Covid 19</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item"> <!--- Data Mahasiswa -->
            <a href="#" class="nav-link {{ Request::routeIs('mahasiswa*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-book"></i>              
              <p>
                Data Mahasiswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('mahasiswa.index') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('mahasiswa.create') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item"> <!--- API Settings -->
            <a href="#" class="nav-link {{ Request::routeIs('dashboard.settings*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-cog"></i>              
              <p>
                API Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('dashboard.settings.api') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>API Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{ route('dashboard.settings.api.list') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>API List</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>