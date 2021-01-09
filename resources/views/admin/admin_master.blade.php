
<!DOCTYPE html>
<html>
<head>
    @include('admin.includes.stylesheets')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    @include('admin.includes.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @if(Auth::guest())
        @include('includes.sidenavbar_root')
    @elseif(Auth::user()->role=='admin')
        @include('admin.includes.sidenav')
    @elseif(Auth::user()->role=='user')
        @include('admin.includes.user_sidenavbar')
    @elseif(Auth::user()->role=='promoter')
        @include('admin.includes.promoter_sidenavbar')
    @endif

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
  <section class="content">
  @yield('admin_content')
    <!-- /.content -->
  </section>
  </div>
  <!-- /.content-wrapper -->
 @include('admin.includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
    @include('admin.includes.scripts')

</body>
</html>
