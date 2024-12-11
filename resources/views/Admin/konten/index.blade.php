<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ANJAB-ABK | Konten</title>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

   <style>
      /* Tambahkan margin antara tombol Tambah dan tabel */
      .mb-4 {
          margin-bottom: 1.5rem !important;
      }

      /* Tombol aksi lebih rapat */
      .btn-sm {
          padding: 6px 10px;
          font-size: 13px;
      }

      /* Tabel tetap rapi dan nyaman dibaca */
      .table th, .table td {
          padding: 12px 15px;
          text-align: center;
      }

      /* Header tabel lebih mencolok */
      .table thead th {
          background-color: #004085;
          color: #fff;
          font-weight: bold;
      }

      /* Efek hover pada baris tabel */
      .table tbody tr:hover {
          background-color: #f7f7f7;
      }

      /* Styling untuk badge status */
      .badge-success {
          background-color: #28a745;
      }

      .badge-warning {
          background-color: #ffc107;
      }

      .badge-secondary {
          background-color: #6c757d;
      }

      /* Gambar dalam tabel */
      .table td img {
          border-radius: 8px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      /* Card dengan shadow lebih lembut */
      .card.shadow-lg {
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }
      a {
      text-decoration: none;
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
            <h1 class="m-0; me-1"><i class="fa-solid fa-image m-2"></i>Konten</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Modal untuk menambah konten -->
            <div class="modal fade" id="contentModal" tabindex="-1" aria-labelledby="contentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contentModalLabel">Tambah Konten Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.konten.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Judul Konten</label>
                                    <input type="text" name="title" id="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="body">Isi Konten</label>
                                    <textarea name="body" id="body" class="form-control" rows="5" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="excerpt">Ringkasan Konten</label>
                                    <textarea name="excerpt" id="excerpt" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Tambah -->
            <div class="d-flex justify-content-start mb-4 ml-2 mt-1">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contentModal">
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            <!-- Card untuk tabel -->
            <div class="col-12">
                 <div class="card shadow-lg">
                      <div class="card-header bg-gradient-primary text-white">
                           <h4 class="mb-0" style="text-align: center; font-family: 'Roboto', sans-serif;">Konten yang Telah Ditambahkan</h4>
                      </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Judul</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contents as $content)
                                        <tr>
                                            <td>{{ $content->title }}</td>
                                            <td>{{ $content->slug }}</td>
                                            <td>
                                                <span class="badge {{ $content->status == 'published' ? 'badge-success' : ($content->status == 'draft' ? 'badge-warning' : 'badge-secondary') }}">
                                                    {{ ucfirst($content->status) }}
                                                </span>
                                            </td>
                                            <td>
                                                @if($content->image)
                                                    <img src="{{ Storage::url('images/' . $content->image) }}" width="120" alt="Gambar Konten" class="img-fluid rounded">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <form action="{{ route('admin.konten.destroy', $content->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus konten ini?')" title="Hapus">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
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
