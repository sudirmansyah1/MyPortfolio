<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SUDIRMANSYAH.COM :: Admin :: @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
 
  <script src="https://kit.fontawesome.com/18e0f5ffe7.js" crossorigin="anonymous"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('AdminLTE/dist/css/adminlte.min.css') }}">
  @yield('custom_css')
</head>
<body class="hold-transition sidebar-mini">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ URL::asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        
      <li class="nav-item">
        <a class="nav-link" href="/admin/logout" role="button">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ URL::asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SUDIRMANSYAH.COM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset(Auth::user()->photo) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Home</li>
          <li class="nav-item">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if (Auth::user()->level == 'Management')
          <li class="nav-header">Users Management</li>
          <li class="nav-item">
            <a href="/admin/users" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          @endif
          <li class="nav-header">Blog Management</li>
          <li class="nav-item">
            <a href="/admin/users" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Blog
              </p>
            </a>
          </li>
          
          <li class="nav-header">Portfolio Management</li>
          <li class="nav-item">
            <a href="/admin/education" class="nav-link">
            <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Education
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/experience" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Experience
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/skills" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
              <p>
                Skills
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/portfolio" class="nav-link">
            <i class="nav-icon fas fa-project-diagram"></i>
              <p>
                Recent Works
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
            @yield('content')
          
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
  <script src="{{ URL::asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ URL::asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ URL::asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ URL::asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ URL::asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ URL::asset('AdminLTE/dist/js/demo.js') }}"></script>
  <!-- Page specific script -->
  @yield('custom_js')
</body>
</html>
