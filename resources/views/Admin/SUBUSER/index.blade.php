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
    .role-super-admin {
        background-color: #f8d7da; /* Light red background */
        color: #721c24; /* Dark red text */
        padding: 3px 6px;
        border-radius: 3px;
        font-size: 0.9em; /* Optional: adjust font size */
    }
    .role-admin-skpd {
        background-color: #fff3cd; /* Light yellow background */
        color: #856404; /* Dark yellow text */
        padding: 3px 6px;
        border-radius: 3px;
        font-size: 0.9em; /* Optional: adjust font size */
    }
    .role-admin-unor {
        background-color: #d1ecf1; /* Light blue background */
        color: #0c5460; /* Dark blue text */
        padding: 3px 6px;
        border-radius: 3px;
        font-size: 0.9em; /* Optional: adjust font size */
    }
    .btn-danger  {
      width: 100%;
      background-color: white;
      border: none;
      color: black;
    }
    /* For Chrome, Safari, and Edge */
select {
    -webkit-appearance: none;
    appearance: none;
    background: transparent;
    border: 1px solid #ccc; /* Adjust the border color if needed */
    padding: 5px 10px; /* Adjust padding to fit your design */
}

/* For Firefox */
select {
    -moz-appearance: none;
    background: transparent;
    border: 1px solid #ccc; /* Adjust the border color if needed */
    padding: 5px 10px; /* Adjust padding to fit your design */
}

/* Additional styling to remove the default arrow in other browsers */
select::-ms-expand {
    display: none;
}
    .status-active {
        background-color: green;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }
    .status-inactive {
        background-color: red;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
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
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
    
            <div class="table-responsive">
              @if ($users->isEmpty())
              <div class="alert alert-info">Tidak ada pengguna untuk ditampilkan.</div>
          @else
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>Status Akses</th> 
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
                        <tr>
                          <td class="text-center">
                            @if($user->access_status == 1)
                                <span class="badge badge-success">Aktif</span>
                            @else
                                <span class="badge badge-danger">Tidak Aktif</span>
                            @endif
                          </td>
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->NM_UNOR }}</td>
                            <td>{{ $user->username }}
                                @if ($user->role === 'Super Admin')
                                    <sup class="role-super-admin">{{ $user->role }}</sup>
                                @elseif ($user->role === 'Admin Skpd')
                                    <sup class="role-admin-skpd">{{ $user->role }}</sup>
                                @elseif ($user->role === 'Admin Unor')
                                    <sup class="role-admin-unor">{{ $user->role }}</sup>
                                @else
                                    {{ $user->role }}
                                @endif
                            </td>
                            <td>{{ $user->KD_UNOR }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                              <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Detail
                                    </button>
                                    <div class="dropdown-menu" style="margin-right: 40px;">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#accessUserModal" data-user-id="{{ $user->id }}">Akses User</a>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                              </td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>                                              
              </table>
          @endif
            </div>
        </div>
        <!-- Modal Form -->
        <div class="modal fade" id="accessUserModal" tabindex="-1" role="dialog" aria-labelledby="accessUserModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="accessUserModalLabel">Pengaturan Akses Pengguna</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form id="accessForm" action="#" method="POST">
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="user_id" id="user_id">
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
                              <select class="form-control" id="unit_organisasi" name="unit_organisasi" disabled>
                              </select>
                          </div>
                          <button type="submit" class="btn" id="submitButton">Nonaktifkan Akses</button>
                      </form>
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
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[data-toggle="modal"]').forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-user-id');
            const form = document.getElementById('accessForm');
            const submitButton = document.getElementById('submitButton');

            fetch(`/users/${userId}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('user_id').value = data.user_id;
                    const roleSelect = document.getElementById('role');
                    roleSelect.value = data.role;

                    const unitOrganisasiSelect = document.getElementById('unit_organisasi');
                    unitOrganisasiSelect.innerHTML = '';

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

                    // Mengubah tombol berdasarkan status akses
                    if (data.access_status) {
                        submitButton.textContent = 'Nonaktifkan Akses';
                        submitButton.classList.remove('btn-danger');
                        submitButton.classList.add('btn-warning');
                        form.action = `/users/${userId}`; // Action untuk menonaktifkan akses
                    } else {
                        submitButton.textContent = 'Aktifkan Akses';
                        submitButton.classList.remove('btn-warning');
                        submitButton.classList.add('btn-success');
                        form.action = `/users/${userId}/activate`; // Action untuk mengaktifkan kembali
                    }
                })
                .catch(error => console.error('Error fetching user data:', error));
        });
    });
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
