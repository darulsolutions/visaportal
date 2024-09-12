  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('frontend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">B I Group</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('add-file') }}" class="nav-link">
              <i class="nav-icon fas fa-window-restore"></i>
              <p>New File</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/file-listing') }}" class="nav-link">
              <i class="far fa-window-restore nav-icon"></i>
              <p>File Listing</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('add-Category') }}" class="nav-link">
              <i class="far fa-address-book nav-icon"></i>
              <p>Add Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/Categories') }}" class="nav-link">
              <i class="far fa-address-book nav-icon"></i>
              <p>Category Listing</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('file-listing') }}" class="nav-link">
              <i class="far fas fa-globe nav-icon"></i>
              <p>Add Employee</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/employee-listing') }}" class="nav-link">
              <i class="far fas fa-globe nav-icon"></i>
              <p>Employee Listing</p>
            </a>
          </li>
          {{-- <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Cities
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('add-City') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add City</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/Cities-listing') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cities Listing</p>
                </a>
              </li>
            </ul>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
