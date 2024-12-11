<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ANJAB-ABK | Manajemen Data</title>

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        background: linear-gradient(to right, #f4f7f6, #e3e4e8);
        color: #333;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    a {
        text-decoration: none;
    }

      .search-form {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    z-index: 1000; /* Pastikan form tetap di atas elemen lain */
    background: linear-gradient(135deg, #f8f9fa, #e2e6ea); /* Gradien lembut */
    padding: 20px; /* Jarak dalam form */
    border-radius: 8px; /* Sudut membulat */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus */
}

/* Styling untuk keseluruhan form */
#search-form {
    width: 100%; /* Memastikan form menggunakan lebar penuh */
    display: flex;
    flex-wrap: wrap; /* Agar elemen tidak terpotong */
}

.rotate-icon i {
    transition: transform 0.3s ease;
}

.rotate-icon[aria-expanded="true"] i {
    transform: rotate(90deg);
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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars ml-3"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link" style="color: black;">Pemerintah Daerah Kabupaten Banyuwangi</a>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user mr-3"></i>
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
            <h1 class="m-0"><i class="fa-solid fa-bars-progress m-2"></i>Manajemen User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="konten" style="margin-top: 3px;">
        <div class="container-fluid">
            <!-- Header dengan form pencarian dan tombol -->
            <div class="card mb-4">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                    <!-- Form Pencarian -->
                    <form id="search-form" class="d-flex flex-wrap align-items-center">
                        <div class="me-3">
                            <label for="NM_UNOR" class="form-label">Pilih Unit Organisasi:</label>
                            <select id="NM_UNOR" class="form-select">
                                <option value="">-- Pilih Unit Organisasi --</option>
                                @foreach ($unors as $unor)
                                    <option value="{{ $unor->NM_UNOR }}" data-kd="{{ $unor->KD_UNOR }}">
                                        {{ $unor->NM_UNOR }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 31px;">Cari</button>
                    </form>

                    <!-- Dropdown Menu -->
                    <div class="btn-group">
                        <button type="button" class="btn rotate-icon" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <ul class="dropdown-menu text-center p-3">
                            <!-- Ikon tambah -->
                            <li class="mb-3">
                                <button class="btn btn-outline-primary d-flex align-items-center mx-auto" data-id_jabatan="" data-toggle="" data-target="">
                                    <i class="fa-solid fa-circle-plus me-2" data-id_jabatan="" data-toggle="modal" data-target="#createJabatanModal"></i> Tambah Jabatan
                                </button>
                            </li>
                            <!-- Ikon akses -->
                            <li>
                                <button class="btn btn-outline-secondary d-flex align-items-center mx-auto" data-bs-toggle="modal" data-bs-target="#aksesTglModal">
                                    <i class="fa-solid fa-universal-access me-2"></i> Pengaturan Akses
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @if(isset($users))
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        @endif

        <div class="modal fade" id="createJabatanModal" tabindex="-1" role="dialog" aria-labelledby="createJabatanModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Jabatan <i class="fa-solid fa-circle-plus"></i></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="accessForm" action="{{ route('manajemenuser.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id_hidden">


                            <div id="loadingMessage" class="alert alert-info mt-3" style="display: none;">Loading...</div>
                            <div id="successMessage" class="alert alert-success mt-3" style="display: none;">Akses Completed</div>
                            <div id="errorMessage" class="alert alert-danger mt-3" style="display: none;"></div>

                            <!-- Pilihan User -->
                            <div class="form-group">
                                <label for="user_id">Pilih User</label>
                                <select name="user_id" id="user_id" class="form-control" required>
                                    <option value="">-- Pilih User --</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- Input Nama Jabatan -->
                            <div class="form-group">
                                <label for="nama_jabatan">Nama Jabatan</label>
                                <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" required>
                            </div>

                            <!-- Input Unit Kerja -->
                            <div class="form-group">
                                <label for="unit_kerja">Unit Kerja</label>
                                <input type="text" class="form-control" id="unit_kerja" name="unit_kerja" required>
                            </div>

                            <!-- Form Jenjang -->
                            <div class="form-group" id="jenjangForm" style="display: none;">
                                <label for="jenjang" class="form-label">Jenjang</label>
                                <select name="jenjang" id="jenjang" class="form-select">
                                    <option value="">Pilih Jenjang</option>
                                    <option value="Mahir">Mahir</option>
                                    <option value="Terampil">Terampil</option>
                                    <option value="Pelaksana Lanjutan">Pelaksana Lanjutan</option>
                                    <!-- Lainnya... -->
                                </select>
                            </div>
                            <!-- Form Eselon -->
                            <div class="form-group" id="eselonForm">
                                <label for="eselon" class="form-label">Eselon</label>
                                <select name="eselon" id="eselon" class="form-select">
                                    <option value="">Pilih Eselon</option>
                                    <option value="Eselon 1A">Eselon 1A</option>
                                    <option value="Eselon 1B">Eselon 1B</option>
                                    <!-- Lainnya... -->
                                </select>
                            </div>

                            <!-- Status Jabatan -->
                            <div class="mb-3">
                                <label for="status_jabatan" class="form-label">Status Jabatan</label>
                                <select name="status_jabatan" id="status_jabatan" class="form-select" required>
                                    <option value="" disabled selected>Pilih Status Jabatan</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan Jabatan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


            <!-- Modal Pengaturan Akses -->
            <div class="modal fade" id="aksesTglModal" tabindex="-1" role="dialog" aria-labelledby="aksesTglModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="aksesTglModalLabel">Pengaturan Akses <i class="fa-solid fa-universal-access"></i></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="accessForm" action="" method="POST">
                                <input type="hidden" name="user_id" id="user_id">
                                <div id="loadingMessage" class="alert alert-info mt-3" style="display: none;">Loading...</div>
                                <div id="successMessage" class="alert alert-success mt-3" style="display: none;">Akses Completed</div>
                                <div id="errorMessage" class="alert alert-danger mt-3" style="display: none;"></div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select name="role" id="role" class="form-select" required>
                                        <option value="">Pilih Role</option>
                                        <option value="Admin Skpd">Admin Skpd</option>
                                        <option value="Admin Unor">Admin Unor</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="access_start_datetime">Akses Mulai</label>
                                    <input type="datetime-local" class="form-control" id="access_start_datetime" name="access_start_datetime">
                                </div>
                                <div class="mb-3">
                                    <label for="access_end_datetime">Akses Berakhir</label>
                                    <input type="datetime-local" class="form-control" id="access_end_datetime" name="access_end_datetime">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detail Analisis Jabatan -->
            <div id="analisis-jabatan-detail">

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
<!-- Bootstrap JS (Harus setelah jQuery) -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function () {
        $('#search-form').on('submit', function (e) {
            e.preventDefault();

            var selectedOption = $('#NM_UNOR option:selected');
            var kdUnor = selectedOption.data('kd');
            var unitName = selectedOption.val();

            if (kdUnor) {
                $('#unit-header').val(unitName);

                $.ajax({
                    url: `/unor/${kdUnor}/jabatans`,
                    method: 'GET',
                    success: function (data) {
                        if (data.jabatans && data.jabatans.length > 0) {
                            const hierarchyHtml = generateHierarchy(data.jabatans);
                            $('#analisis-jabatan-detail').html(hierarchyHtml).show();
                        } else {
                            $('#analisis-jabatan-detail').html(
                                `<div class="col-12 text-center">
                                    <p class="alert alert-warning">Data jabatan tidak ditemukan. Silakan cek kembali atau hubungi Unit terkait.</p>
                                </div>`).show();
                        }
                    },
                    error: function () {
                        $('#analisis-jabatan-detail').html('<div class="container-fluid"><p>Terjadi kesalahan saat memuat data. Silakan coba lagi nanti.</p></div>').show();
                    }
                });
            } else {
                alert('Silakan pilih unit organisasi.');
            }
        });

        // Fungsi untuk membangun hierarki dalam bentuk HTML
        function generateHierarchy(jabatans) {
            let html = '<ul class="tree">';
            jabatans.forEach(jabatan => {
                html += `<li>
                    <span class="jabatan-card" style="background-color: ${getBackgroundColor(jabatan.jenis_jabatan)}">
                        ${jabatan.nama_jabatan}
                    </span>`;
                if (jabatan.anak_jabatans && jabatan.anak_jabatans.length > 0) {
                    html += generateHierarchy(jabatan.anak_jabatans);
                }
                html += '</li>';
            });
            html += '</ul>';
            return html;
        }

        // Fungsi untuk mendapatkan warna berdasarkan jenis jabatan
        function getBackgroundColor(jenis) {
            switch (jenis) {
                case 'struktural': return 'darkblue';
                case 'fungsional': return 'darkgoldenrod';
                case 'pelaksana': return 'darkgreen';
                default: return 'gray';
            }
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
