<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ANJAB-ABK | Peta Jabatan</title>

  <!-- Fonts and Styles -->
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
      body {
          background-color: #eef2f7;
          font-family: 'Arial', sans-serif;
      }

      .diagram-container {
          width: 100%;
          transform-origin: center center; /* Mengatur titik asal zoom ke pusat kontainer */
          transition: transform 0.3s ease; /* Efek transisi zoom */
          display: flex;
          justify-content: center; /* Memastikan konten berada di tengah */
          align-items: center;
          height: 100%; /* Menjamin tinggi penuh */
      }


      .diagram {
          display: flex;
          flex-direction: column;
          align-items: center;
          padding: 20px;
          position: relative;
      }

      .node {
          position: relative;
          margin: 20px 0;
      }

      /* Box Jabatan */
      .box {
          border: 1px solid #4e73df;
          padding: 20px;
          border-radius: 10px;
          background: linear-gradient(145deg, #ffffff, #dfe9f3);
          box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
          text-align: center;
          cursor: pointer;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .box:hover {
          transform: translateY(-10px) scale(1.05);
          box-shadow: 0 10px 20px rgba(78, 115, 223, 0.3);
          background: linear-gradient(145deg, #4e73df, #1c4b97);
          color: #fff;
      }

      .children {
          display: flex;
          justify-content: center;
          position: relative;
          width: 100%;
          margin-top: 20px;
      }

      .children::before {
          content: '';
          position: absolute;
          top: -20px;
          left: 50%;
          transform: translateX(-50%);
          background: #4e73df;
      }

      .children > .node {
          position: relative;
          margin: 0 10px;
      }

      /* Menambahkan SVG Path sebagai penghubung */
      .children > .node::before {
          content: '';
          position: absolute;
          top: -20px;
          left: 50%;
          transform: translateX(-50%);
          width: 2px;
          height: 20px;
          background: #4e31fe;
      }

      @media (max-width: 768px) {
          .box {
              font-size: 14px;
          }

          .children {
              flex-direction: column;
          }

          .children > .node {
              margin: 10px 0;
          }
      }

      .zoom-controls {
          display: flex;
          justify-content: center;
      }

      .zoom-in, .zoom-out {
          font-size: 16px;
          cursor: pointer;
          border: none;
      }

      .zoom-in:disabled, .zoom-out:disabled {
          background-color: #ccc;
          cursor: not-allowed;
      }

</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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

<a class="m-3" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
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
            <h1 class="m-0"><i class="fa-solid fa-map m-2"></i>Peta Jabatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div>
            <h1 class="mb-4 text-center" style="color: #4e73df;">Diagram Hirarki Jabatan<sup><i class="zoom-in"></i></sup></h1>

                <i class="zoom-out"></i>
            <div class="diagram-container">
                <div class="diagram">
                    @foreach ($jabatans as $jabatan)
                        <div class="node">
                            <div class="box">
                                <strong>{{ $jabatan->nama_jabatan }}</strong>
                            </div>
                            @if ($jabatan->anakJabatans->isNotEmpty())
                                <div class="children">
                                    @foreach ($jabatan->anakJabatans as $anakJabatan)
                                        @include('Admin_Unor.LAPORAN.petajabatan.peta_jabatan_list', ['anakJabatan' => $anakJabatan])
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
<!-- Scripts -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let diagramContainer = document.querySelector('.diagram-container');
        let zoomInButton = document.querySelector('.zoom-in');
        let zoomOutButton = document.querySelector('.zoom-out');
        let scale = 1;  // Variabel untuk skala yang akan dikontrol
        let minScale = 0.5;  // Skala minimal
        let maxScale = 3;  // Skala maksimal

        // Fungsi untuk melakukan zoom in
        zoomInButton.addEventListener('click', function() {
            if (scale < maxScale) {
                scale += 0.1;  // Menambah skala sebesar 0.1
                diagramContainer.style.transform = `scale(${scale})`;  // Terapkan skala pada container
            }
        });

        // Fungsi untuk melakukan zoom out
        zoomOutButton.addEventListener('click', function() {
            if (scale > minScale) {
                scale -= 0.1;  // Mengurangi skala sebesar 0.1
                diagramContainer.style.transform = `scale(${scale})`;  // Terapkan skala pada container
            }
        });

        // Fungsi untuk zoom menggunakan scroll
        diagramContainer.addEventListener('wheel', function(event) {
            event.preventDefault();  // Mencegah scroll biasa
            if (event.deltaY < 0 && scale < maxScale) {
                scale += 0.1;  // Zoom in
            } else if (event.deltaY > 0 && scale > minScale) {
                scale -= 0.1;  // Zoom out
            }
            diagramContainer.style.transform = `scale(${scale})`;  // Terapkan skala pada container
        });

        // Menambahkan event listener untuk drag diagram
        let isDragging = false;
        let startX, startY;

        diagramContainer.addEventListener('mousedown', function(event) {
            isDragging = true;
            startX = event.clientX;
            startY = event.clientY;
            diagramContainer.style.transition = 'none';  // Menonaktifkan transisi saat dragging
        });

        document.addEventListener('mousemove', function(event) {
            if (isDragging) {
                let moveX = event.clientX - startX;
                let moveY = event.clientY - startY;
                diagramContainer.style.transform = `translate(${moveX}px, ${moveY}px) scale(${scale})`;  // Terapkan translate dan scale
            }
        });

        document.addEventListener('mouseup', function() {
            isDragging = false;
            diagramContainer.style.transition = 'transform 0.3s ease';  // Mengembalikan transisi setelah dragging selesai
        });
    });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/regular.min.js" integrity="sha512-kOmvRi+0imoekwslOzP/X1LXQnzcttzqYYt3urKD4nhd5fMYwRfXgDS5Nh7b7pQjKPjBPSX9PmhCLrkfkxUcBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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


