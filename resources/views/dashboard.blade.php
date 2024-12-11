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
    .disabled {
    pointer-events: none;
    color: #6c757d;
    cursor: not-allowed;
}/* Menambahkan gradient untuk header card */
 .bg-gradient-primary {
     background: linear-gradient(to right, #0066cc, #33b5e5);
 }

 /* Styling tabel */
 .table-bordered th, .table-bordered td {
     border: 1px solid #ddd !important;
 }

 .table th, .table td {
     padding: 12px;
     text-align: center;
 }

 .table-striped tbody tr:nth-child(odd) {
     background-color: #f8f9fa;
 }

 .table-striped tbody tr:nth-child(even) {
     background-color: #fff;
 }

 /* Hover effect yang lebih halus */
 .table tbody tr:hover {
     background-color: #f1f1f1;
     cursor: pointer;
 }

 /* Shadow pada card */
 .card.shadow-lg {
     box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
 }
 /* Efek hover dengan zoom pada th */
 .table th {
     transition: transform 0.3s ease, background-color 0.3s ease;
 }

 .table th:hover {
     transform: scale(1.1); /* Memperbesar ukuran elemen saat hover */
     background-color: #4e73df; /* Menambahkan warna latar belakang saat hover */
 }

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('Travisa/img/banyuwangi.png') }}" alt="anjab-logo" height="500px" width="auto">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link" style="color: black;">Pemerintah Daerah Kabupaten Banyuwangi</a>
    </ul>
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
          <a class="ml-3 mb-mt-2" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
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
            <h1 class="m-0"><i class="nav-icon fas fa-table mr-2"></i>Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
              <div class="row" style="margin-top: 12px;">
                 @if(Auth::user()->role === 'Admin Skpd')
                  <!-- Konten untuk Admin Skpd -->
                  <div class="col-lg-4 col-6">
                      <div class="small-box bg-info">
                          <div class="inner">
                              <h3>{{ $jumlahJabatanStruktural }}</h3>
                              <p>Jabatan Struktural</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                          </div>
                          <a href="#" class="small-box-footer">Jabatan Struktural</a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-6">
                      <div class="small-box bg-success">
                          <div class="inner">
                              <h3>{{ $jumlahJabatanFungsional }}</h3>
                              <p>Jabatan Fungsional</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                          </div>
                          <a href="#" class="small-box-footer">Jabatan Fungsional</a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-6">
                      <div class="small-box bg-warning">
                          <div class="inner">
                              <h3>{{ $jumlahJabatanPelaksana }}</h3>
                              <p>Jabatan Pelaksana</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                          </div>
                          <a href="#" class="small-box-footer">Jabatan Pelaksana</a>
                      </div>
                  </div>
              </div>
                  @elseif(Auth::user()->role === 'Super Admin')
                      <!-- Konten untuk Super Admin -->
                      <div class="col-12" style="margin-top: 3px;">
                          <div class="card shadow-lg">
                              <div class="card-header bg-gradient-primary text-white">
                                  <h4 class="mb-0" style="text-align: center; font-family: 'Roboto', sans-serif;">Aktivitas User</h4>
                              </div>
                              <div class="card-body">
                                  <div class="table-responsive">
                                      <table class="table table-bordered table-hover">
                                          <thead class="thead-dark">
                                              <tr>
                                                  <th>No</th>
                                                  <th>Waktu Login</th>
                                                  <th>Username</th>
                                                  <th>Email</th>
                                                  <th>Waktu Logout</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($adminSkpdUsers as $key => $user)
                                                  <tr>
                                                      <td>{{ $key + 1 }}</td>
                                                      <td>{{ $user->access_start_datetime ? $user->access_start_datetime->format('d-m-Y H:i') : 'Belum login' }}</td>
                                                      <td>{{ $user->username }}</td>
                                                      <td>{{ $user->email }}</td>
                                                      <td>{{ $user->access_end_datetime ? $user->access_end_datetime->format('d-m-Y H:i') : 'Belum logout' }}</td>
                                                  </tr>
                                              @endforeach
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endif

          </div>
      </div><!-- /.container-fluid -->
  </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Created By Pemkab Bwi <a href="https://adminlte.io">AnjabAbk.id</a></strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>2024</b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
<script src="{{ asset('AdminLTE/dist/js/pages/dashboard.js') }}"></script>
<script>
    document.querySelector('#logout-button').addEventListener('click', function(event) {
    event.preventDefault();

    fetch('{{ route('logout') }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({})
    }).then(response => {
        if (response.ok) {
            window.location.href = '/';
        }
    });
});

</script>


</body>
</html>
