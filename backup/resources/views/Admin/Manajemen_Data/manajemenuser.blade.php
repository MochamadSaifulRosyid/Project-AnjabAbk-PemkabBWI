<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ANJAB-ABK | Dashboard</title>

  <!-- Link to stylesheets -->
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
        background: linear-gradient(to right, #f4f7f6, #e3e4e8);
        color: #333;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container-fluid {
      border-radius: 5px;
    }
    .table-wrapper {
            position: relative;
            overflow: auto;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th {
            position: -webkit-sticky; /* For Safari */
            position: sticky;
            top: 0;
            background-color: white; /* Change to match your design */
            z-index: 1;
            border: 1px solid #dee2e6; /* Optional, to match table borders */
        }
        .table td {
            padding: 8px; /* Adjust padding as necessary */
            border: 1px solid #dee2e6; /* Optional, to match table borders */
        }
        .table thead th {
            background-color: #f8f9fa; /* Optional, for header background */
        }
    .sidebar-satu {
        float: left;
        width: 70%;
        height: 600px;
        border: 1px solid #c2c2c2;
      }
      
      td, a {
        color: black;
      }
      sup {
        background-color: 
      }
      .jabatan-struktural {
      background-color: #f8d7da; /* Merah muda */
      color: #721c24; /* Merah tua */
      }

      .jabatan-fungsional {
          background-color: #fff3cd; /* Kuning muda */
          color: #856404; /* Kuning tua */
      }

      .jabatan-pelaksana {
          background-color: #d1ecf1; /* Biru muda */
          color: #0c5460; /* Biru tua */
      }
      .sidebar-dua {
        float: left;
        width: 30%;
        height: 600px;
        border: 1px solid #c2c2c2;
        position: relative;
        height: 600px; /* Sesuaikan dengan kebutuhan */
        overflow-y: auto;
      }

      .search-form {
        position: -webkit-sticky; /* Untuk browser berbasis Webkit */
        position: sticky;
        top: 0; /* Jarak dari bagian atas container */
        background-color: white; /* Latar belakang agar kontras dengan daftar */
        z-index: 10; /* Untuk memastikan form tetap di atas elemen lain */
        padding: 10px; /* Padding untuk memberikan jarak di sekeliling */
        border-bottom: 1px solid #dee2e6; /* Garis bawah untuk pemisah */
        box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Opsional, untuk efek bayangan */
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
                @if(Auth::user()->role === 'Super Admin')
                    <!-- Menu untuk Super Admin -->
                    <li class="nav-item">
                      <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Dashboard
                        </p>
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
                @elseif(Auth::user()->role === 'Admin Skpd')
                    <!-- Menu untuk Admin Skpd -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit" style="color: #c2c2c2; margin-left: 2px; margin-right: 5px"></i>
                            <p>
                                Analisis Jabatan
                                <i class="fas fa-angle-left right"></i>
                            </p>
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
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-briefcase" style="color: #c2c2c2; margin-left: 6px; margin-right: 10px"></i>
                            <p>
                                Analisis Beban Kerja
                                <i class="fas fa-angle-left right"></i>
                            </p>
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
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-file" style="color: #c2c2c2; margin-left: 8px; margin-right: 10px"></i>
                            <p>
                                Laporan
                                <i class="fas fa-angle-left right"></i>
                            </p>
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
            <h1 class="m-0">Manajemen User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manajemen User</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
<section class="konten">
  <div class="container-fluid">
    <div class="sidebar-satu">
      <h1>Silakan pilih Unit Organisasi</h1>
    </div>
    <div class="sidebar-dua">
      <div class="search-form">
        <form id="search-form">
          <div class="input-group">
            <input type="text" class="form-control" id="search-query" placeholder="Cari Unit">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Cari</button>
            </div>
          </div>
        </form>
      </div>

      <div class="table-wrapper mt-3">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Unit Organisasi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($unors as $unor)
              <tr>
                <td>
                  <a href="#" class="unor-link" data-kd_unor="{{ $unor->KD_UNOR }}">
                    {{ $unor->NM_UNOR }}
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <!-- Tempat untuk menampilkan detail analisis jabatan -->
    <div id="analisis-jabatan-detail" class="mt-3" style="display: none;">
      <!-- Detail analisis jabatan akan ditampilkan di sini -->
    </div>
  </div>
</section>

  
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('click', '.unor-link', function(e) {
    e.preventDefault();
    var kdUnor = $(this).data('kd_unor');
    $.ajax({
        url: '/unor/' + kdUnor + '/jabatans',
        method: 'GET',
        success: function(data) {
            if (data.unor && data.jabatans) {
                $('.sidebar-satu').html(`
                    <div class="container-fluid">
                      <h1>Data Jabatan untuk ${data.unor.NM_UNOR}</h1>
                          ${data.jabatans.map(jabatan => `
                              <table class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Kode Jabatan</th>
                                    <th>Nama Jabatan</th>
                                    <th>Unit Kerja</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>${jabatan.kode_jabatan}</td>
                                      <td>${jabatan.nama_jabatan}<sup>${jabatan.jenis_jabatan}</sup></td>
                                      <td>${jabatan.unit_kerja}</td>
                                      <td>
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                              Detail
                                          </button>
                                          <div class="dropdown-menu" style="margin-right: 50px;">
                                              <a href="#" class="dropdown-item" data-action="analisis-jabatan">Analisis Jabatan</a>
                                              <a href="#" class="dropdown-item" data-action="analisis-beban-kerja">Analisis Beban Kerja</a>
                                              <a href="#" class="dropdown-item" data-action="peta-jabatan">Peta Jabatan</a>

                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                </tbody>
                              </table>
                          `).join('')}
                    </div>
                `);
            } else {
                $('.sidebar-satu').html('<p>Data jabatan tidak ditemukan.</p>');
            }
        },
        error: function() {
            $('.sidebar-satu').html('<p>Terjadi kesalahan saat memuat data.</p>');
        }
    });
});

$(document).on('click', '.dropdown-item', function(e) {
    e.preventDefault();
    var action = $(this).data('action');
    var userId = $(this).closest('tr').data('user-id'); // Pastikan `data-user-id` ditambahkan pada elemen tr

    if (typeof userId === 'undefined') {
        console.error('User ID is undefined');
        $('.sidebar-satu').html('<p>Terjadi kesalahan saat memuat data.</p>');
        return;
    }

    if (action === 'analisis-jabatan') {
        var url = '{{ route('analisisjabatan.get', ['userId' => '__USER_ID__']) }}';
        url = url.replace('__USER_ID__', userId);

        $.ajax({
            url: url,
            method: 'GET',
            success: function(data) {
                if (data.analisisJabatan) {
                    $('.sidebar-satu').html(`
                        <div class="container-fluid">
                            <h1>Analisis Jabatan</h1>
                            ${data.analisisJabatan.map(anjab => `
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Jabatan</th>
                                            <th>Nama Jabatan</th>
                                            <th>Ikhtisar Jabatan</th>
                                            <th>Objek Kerja</th>
                                            <th>Uraian Tugas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>${anjab.kode_jabatan}</td>
                                            <td>${anjab.nama_jabatan}</td>
                                            <td>${anjab.ikhtisar_jabatan}</td>
                                            <td>${anjab.objek_kerja}</td>
                                            <td>${anjab.uraian_tugas}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            `).join('')}
                        </div>
                    `);
                } else {
                    $('.sidebar-satu').html('<p>Data analisis jabatan tidak ditemukan.</p>');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                $('.sidebar-satu').html('<p>Terjadi kesalahan saat memuat data.</p>');
            }
        });
    }
});


</script>

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
<!-- overlayScrollbars s-->
<script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('AdminLTE/dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
