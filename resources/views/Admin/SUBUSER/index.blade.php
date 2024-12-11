<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ANJAB-ABK | Sub User</title>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABQFJf2g1tI0HXk3fCXyq7fiP5l5u31tEXBz4zzhXxfgywOJl2pJcX6" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
      a {
        text-decoration: none;
      }
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
      <!-- Sidebar Menu -->
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
            <h1 class="m-0">            <h1 class="ml-1"><i class="fa-solid fa-users me-2 ml-1 mt-1"></i></i>User</h1>
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
        <div class="container-fluid">
            <!-- Button untuk membuka modal -->
            <button type="button" class="btn btn-primary ml-2 mb-4" style="margin-top: 12px;" data-bs-toggle="modal" data-bs-target="#userModal"><i class="fas fa-plus"></i></button>

            <!-- Modal -->
            <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userModalLabel">Tambah Data User</h5>
                            <!-- Tombol Close (X) -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('user.store') }}" method="POST">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" required>
                                        @error('username') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="example@gmail.com" required>
                                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                        @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="NM_UNOR" class="form-label">Pilih UNOR</label>
                                        <select name="NM_UNOR" id="NM_UNOR" class="form-select" required>
                                            <option value="">Pilih UNOR</option>
                                            @foreach ($unors as $unor)
                                                <option value="{{ $unor->NM_UNOR }}" data-kd="{{ $unor->KD_UNOR }}">{{ $unor->NM_UNOR }}</option>
                                            @endforeach
                                        </select>
                                        @error('NM_UNOR') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="KD_UNOR" class="form-label">Kode UNOR</label>
                                        <input type="text" name="KD_UNOR" id="KD_UNOR" class="form-control" value="{{ old('KD_UNOR') }}" readonly>
                                        @error('KD_UNOR') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="role" class="form-label">Role</label>
                                        <select name="role" id="role" class="form-select" required>
                                            <option value="">Pilih Role</option>
                                            <option value="Super Admin">Super Admin <i class="fa-solid fa-crown"></i></option>
                                            <option value="Admin Skpd">Admin Skpd</option>
                                            <option value="Admin Unor">Admin Unor</option>
                                        </select>
                                        @error('role') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>





            <!-- Notifikasi Success -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

                <div class="col-12">
                     <div class="card shadow-lg">
                          <div class="card-header bg-gradient-primary text-white">
                               <h4 class="mb-0" style="text-align: center; font-family: 'Roboto', sans-serif;">Form List User</h4>
                          </div>
                          @if ($users->isEmpty())
                               <div class="alert alert-info">Tidak ada pengguna untuk ditampilkan.</div>
                          @else
                          <div class="card-body">
                               <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <tr style="text-align: center">
                                                <th>User ID</th>
                                                <th>Unit Organisasi</th>
                                                <th>Username</th>
                                                <th>Kode UNOR</th>
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr style="text-align: center">
                                                    <td>{{ $user->user_id }}</td>
                                                    <td>{{ $user->NM_UNOR }}</td>
                                                    <td>
                                                        {{ $user->username }}
                                                        @if ($user->role === 'Super Admin')
                                                            <span class="badge badge-danger">{{ $user->role }}<i class="fa-solid fa-crown ml-1"></i></span>
                                                        @elseif ($user->role === 'Admin Skpd')
                                                            <span class="badge badge-warning">{{ $user->role }}</span>
                                                        @elseif ($user->role === 'Admin Unor')
                                                            <span class="badge badge-info">{{ $user->role }}</span>
                                                        @else
                                                            <span class="badge badge-secondary">{{ $user->role }}</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->KD_UNOR }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                Aksi
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#accessUserModal" style="text-align: center; margin-left: 0;" data-user-id="{{ $user->id }}">Akses User</a>
                                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger btn-sm" style="width: 100%;" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                               </div>
                          </div>
                     </div>
                </div>

        <!-- Modal Form -->
        <div class="modal fade" id="accessUserModal" tabindex="-1" role="dialog" aria-labelledby="accessUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="accessUserModalLabel">Pengaturan Akses Pengguna <i class="fa-solid fa-universal-access"></i></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="accessForm" action="" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="user_id" id="user_id">
                            <div id="loadingMessage" class="alert alert-info mt-3" style="display: none;">Loading...</div>
                <div id="successMessage" class="alert alert-success mt-3" style="display: none;">Akses Completed</div>
                <div id="errorMessage" class="alert alert-danger mt-3" style="display: none;"></div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role" disabled>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Admin Skpd">Admin Skpd</option>
                                    <option value="Admin Unor">Admin Unor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="unit_organisasi">Unit Organisasi</label>
                                <select class="form-control" id="unit_organisasi" name="unit_organisasi" disabled></select>
                            </div>
                            <div class="form-group">
                                <label for="analisis_jabatan">Akses Analisis Jabatan</label>
                                <select class="form-control" id="analisis_jabatan" name="analisis_jabatan">
                                    <option value="1">Aktif</option>
                                    <option value="0">Nonaktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="analisis_beban_kerja">Akses Analisis Beban Kerja</label>
                                <select class="form-control" id="analisis_beban_kerja" name="analisis_beban_kerja">
                                    <option value="1">Aktif</option>
                                    <option value="0">Nonaktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="laporan">Akses Laporan</label>
                                <select class="form-control" id="laporan" name="laporan">
                                    <option value="1">Aktif</option>
                                    <option value="0">Nonaktif</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary" id="submitAccessForm">Simpan</button>
                        </form>
                        <div id="errorMessage" class="text-danger mt-2" style="display: none;"></div>
                    </div>
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

<script>
    // Menangani perubahan nilai dropdown untuk NM_UNOR
    document.getElementById('NM_UNOR').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex]; // Ambil opsi yang dipilih
        var kdUnor = selectedOption.getAttribute('data-kd'); // Ambil data-kd dari opsi yang dipilih
        document.getElementById('KD_UNOR').value = kdUnor; // Isi KD_UNOR dengan nilai data-kd
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[data-toggle="modal"]').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-user-id'); // Get user ID from data attribute
            const form = document.getElementById('accessForm');

            // Fetch user data
            fetch(`/users/${userId}`)
                .then(response => response.json())
                .then(data => {
                    // Set form values
                    document.getElementById('user_id').value = data.id; // Set the user ID
                    form.action = `/users/${userId}/access`; // Set form action to target correct user

                    const roleSelect = document.getElementById('role');
                    roleSelect.value = data.role;

                    const unitOrganisasiSelect = document.getElementById('unit_organisasi');
                    unitOrganisasiSelect.innerHTML = '';

                    // Fetch unit organisasi based on role
                    fetch(`/units?role=${data.role}`)
                        .then(response => response.json())
                        .then(units => {
                            units.forEach(unit => {
                                const option = document.createElement('option');
                                option.value = unit.KD_UNOR;
                                option.textContent = unit.NM_UNOR;
                                unitOrganisasiSelect.appendChild(option);
                            });

                            unitOrganisasiSelect.value = data.KD_UNOR;
                        });

                    const access = data.access || {};
                    document.getElementById('analisis_jabatan').value = access.analisis_jabatan ? 1 : 0;
                    document.getElementById('analisis_beban_kerja').value = access.analisis_beban_kerja ? 1 : 0;
                    document.getElementById('laporan').value = access.laporan ? 1 : 0;
                })
                .catch(error => console.error('Error fetching user data:', error));
        });
    });

    document.getElementById('submitAccessForm').addEventListener('click', function() {
        const form = document.getElementById('accessForm');
        const formData = new FormData(form);
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');
        const loadingMessage = document.getElementById('loadingMessage');

        loadingMessage.style.display = 'block'; // Show loading message
        successMessage.style.display = 'none';
        errorMessage.style.display = 'none';

        fetch(form.action, {
            method: 'POST',
            body: formData,
        })
        .then(response => {
            loadingMessage.style.display = 'none'; // Hide loading message
            if (!response.ok) {
                return response.text().then(text => {
                    try {
                        const errorData = JSON.parse(text);
                        errorMessage.textContent = errorData.message || 'Error occurred';
                    } catch (e) {
                        errorMessage.textContent = 'An unexpected error occurred: ' + text;
                    }
                    errorMessage.style.display = 'block';
                    throw new Error('Response not OK');
                });
            }
            return response.json();
        })
        .then(data => {
            successMessage.textContent = data.message || 'Access updated successfully!';
            successMessage.style.display = 'block';

            // Hide success message after 3 seconds
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 3000);

            // Close modal and refresh page
            $('#accessUserModal').modal('hide');
            location.reload();
        })
        .catch(error => {
            loadingMessage.style.display = 'none'; // Hide loading message
            errorMessage.textContent = 'Error submitting form: ' + error.message;
            errorMessage.style.display = 'block';
            console.error('Error submitting form:', error);
        });
    });
});


</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/v4-shims.min.js" integrity="sha512-T2pk94x1bkMAO9y5NzvtA0wQUt9ddhz1NWlWLLV/Tu51fB/g0Sd6I5sCax5DR2/rgZ4fqRaCH4dS8P5dt9rvmg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js" integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
