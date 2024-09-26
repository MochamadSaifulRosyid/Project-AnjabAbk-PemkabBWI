<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ANJAB-ABK | Dashboard</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Custom styling */
    .page-title {
        color: #343a40; /* Dark color for title */
    }
    .table thead {
        background-color: #343a40; /* Dark background for table header */
        color: #ffffff; /* White text color for header */
    }
    .table th, .table td {
        vertical-align: middle; /* Align text vertically in table cells */
    }
    .btn-group .dropdown-menu {
        min-width: 200px;
    }
    .disabled {
    pointer-events: none;
    color: #6c757d; /* Warna abu-abu atau sesuai tema */
    cursor: not-allowed;
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link" style="color: black;">Pemerintah Daerah Kabupaten Banyuwangi</a>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> {{ auth()->user()->username }}
          </a>
          <div class="dropdown-divider"></div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img class="animation__shake" src="{{ asset('Travisa/img/banyuwangi.png') }}" alt="anjab-logo" height="50px" width="auto">
      <span>Anjab Abk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class="fa-solid fa-user-tie" style="color: #c2c2c2; margin-top: 8px; margin-left: 10px"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->username }}</a>
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
            @if(Auth::check())
                @php
                    $isAccessClosed = !Auth::user()->access_status;
                    $access = json_decode(Auth::user()->access, true) ?? [];
                @endphp
                @if(!$isAccessClosed)
                    @if(Auth::user()->role === 'Super Admin')
                        <!-- Menu untuk Super Admin -->
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/konten" class="nav-link">
                                <i class="fa-solid fa-image" style="color: #c2c2c2; margin-left: 6px; margin-right: 10px"></i>
                                <p>Konten</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user" class="nav-link">
                                <i class="fa-solid fa-users" style="color: #c2c2c2; margin-left: 4px; margin-right: 8px"></i>
                                <p>Sub User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-bars-progress" style="color: #c2c2c2; margin-left: 2px; margin-right: 5px"></i>
                                <p>Manajemen Data<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/manajemenuser" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manajemen User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->role === 'Admin Skpd')
                        <!-- Menu untuk Admin Skpd -->
                        @if(isset($access['analisis_jabatan']) && $access['analisis_jabatan'])
                        <li class="nav-item">
                          <a href="/dashboard" class="nav-link">
                              <i class="nav-icon fas fa-table"></i>
                              <p>Dashboard</p>
                          </a>
                      </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit" style="color: #c2c2c2; margin-left: 2px; margin-right: 5px"></i>
                                    <p>Analisis Jabatan<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/jabatan" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Jabatan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/syaratjabatan" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Syarat Jabatan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/analisisjabatan" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Analisis Jabatan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if(isset($access['analisis_beban_kerja']) && $access['analisis_beban_kerja'])
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa-solid fa-briefcase" style="color: #c2c2c2; margin-left: 6px; margin-right: 10px"></i>
                                    <p>Analisis Beban Kerja<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/datapegawai" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Pegawai</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/dataabk" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Analisis Beban Kerja</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if(isset($access['laporan']) && $access['laporan'])
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa-solid fa-file" style="color: #c2c2c2; margin-left: 8px; margin-right: 10px"></i>
                                    <p>Laporan<i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/petajabatan" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Peta Jabatan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/hasilanjab" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Hasil Anjab</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/hasilabk" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Hasil Abk</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @endif
                @else
                    <!-- Jika akses ditutup -->
                    <li class="nav-item">
                        <a href="#" class="nav-link disabled" title="Akses ditutup, silahkan hubungi admin">
                            <i class="nav-icon fas fa-ban" style="color: #dc3545;"></i>
                            <p>Dashboard (Akses Ditutup)</p>
                        </a>
                    </li>
                @endif
            @endif
        </ul>
    </nav>
    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Syarat Jabatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Syarat Jabatan</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

        <!-- Add new syarat jabatan button -->
        <a href="{{ route('syaratjabatan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

        <!-- Table to display syarat jabatan list -->
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Kode Jabatan</th>
              <th>Jenis Jabatan</th>
              <th>Nama Jabatan</th>
              <th>Unit Kerja</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($syaratJabatan as $syarat)
              <tr>
                <td>{{ $syarat->kode_jabatan }}</td>
                <td>{{ $syarat->jabatan->jenis_jabatan }}</td>
                <td>{{ $syarat->jabatan->nama_jabatan }}</td>
                <td>{{ $syarat->jabatan->unit_kerja }}</td>
                <td>
                  <div class="btn-group">
                      <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          Detail
                      </button>
                      <div class="dropdown-menu" style="margin-right: 50px;">
                          <a class="dropdown-item" href="{{ route('syaratjabatan.show', $syarat->id_syaratjabatan) }}">Lihat Data</a>
                          <form action="{{ route('syaratjabatan.destroy', $syarat->id_syaratjabatan) }}" method="POST" style="display:inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                          </form>
                      </div>
                  </div>
              </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Created By Pemkab Bwi <a href="https://adminlte.io">AnjabAbk.id</a></strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>2024</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('AdminLTE/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('AdminLTE/dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
