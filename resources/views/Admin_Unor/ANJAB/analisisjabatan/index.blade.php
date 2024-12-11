<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ANJAB-ABK | Analisis Jabatan</title>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
/* Styling untuk Title */
.page-title {
    color: #343a40; /* Warna gelap untuk judul */
}

/* Styling untuk Tabel Header */
.table thead {
    background-color: #343a40; /* Background gelap untuk header tabel */
    color: #ffffff; /* Warna teks putih untuk header */
}

.table th, .table td {
    vertical-align: middle; /* Menyelaraskan teks secara vertikal di dalam sel tabel */
}

/* Styling untuk Button Disabled */
.disabled {
    pointer-events: none;
    color: #6c757d; /* Warna abu-abu atau sesuai tema */
    cursor: not-allowed;
}

/* Modal Styling */
.modal-dialog {
    max-width: 800px;
    margin: 1.75rem auto;
}

.modal-content {
    padding: 1.5rem;
}

.modal-header {
    background-color: #343a40; /* Background gelap untuk header modal */
    color: white;
    border-radius: 5px 5px 0 0;
    padding: 15px 20px;
}

.modal-title {
    font-weight: bold;
    color: white; /* Menyesuaikan warna judul agar lebih kontras */
}

.modal-footer {
    padding: 15px 20px;
}

.modal-footer button {
    font-weight: bold;
}

.form-select, .form-control {
    font-size: 1rem;
    padding: 10px;
}

/* Padding form-group untuk elemen form */
.mb-3 {
    margin-bottom: 1rem;
}

.form-label {
    font-weight: bold;
}

/* Responsif di layar kecil */
@media (max-width: 767px) {
    .modal-dialog {
        max-width: 100%;
        margin: 0;
    }

    .modal-header {
        text-align: center;
    }
}
a {
text-decoration: none;
}
/* Styling umum untuk tabel */
.table {
    width: 100%; /* Membuat tabel mengisi lebar kontainer */
    margin-bottom: 1.5rem; /* Memberikan ruang di bawah tabel */
    border-collapse: collapse; /* Menghilangkan spasi antara border */
}

/* Styling untuk header tabel */
.table thead {
    background: linear-gradient(135deg, #0066cc, #004c99); /* Gradasi biru dari terang ke gelap */
    color: white; /* Warna teks header putih */
    text-transform: uppercase; /* Membuat semua teks header menjadi kapital */
    font-size: 1.1rem; /* Ukuran font header sedikit lebih besar */
}

.table th {
    padding: 14px 18px; /* Menambahkan padding untuk header */
    text-align: center; /* Menyelaraskan teks ke tengah */
    font-weight: bold; /* Membuat teks tebal */
    border-right: 2px solid rgba(255, 255, 255, 0.1); /* Menambahkan garis tipis di sebelah kanan header */
}

.table th:last-child {
    border-right: none; /* Menghapus garis pada kolom terakhir */
}

/* Styling untuk baris tabel */
.table tbody tr:nth-child(odd) {
    background-color: #f8f9fa; /* Latar belakang terang untuk baris ganjil */
}

.table tbody tr:nth-child(even) {
    background-color: #ffffff; /* Latar belakang putih untuk baris genap */
}

.table td {
    padding: 12px 15px; /* Menambahkan padding untuk sel tabel */
    text-align: center; /* Menyelarakan teks ke tengah */
    vertical-align: middle; /* Menyelaraskan teks vertikal */
}



/* Styling untuk tombol aksi dan dropdown */
.btn-group {
    position: relative;
}

.btn-info {
    background-color: #17a2b8; /* Warna biru untuk tombol detail */
    border-color: #17a2b8;
}


.dropdown-menu {
    background-color: #ffffff;
    border: 1px solid #ccc;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    min-width: 160px; /* Lebar minimum untuk dropdown */
    transition: box-shadow 0.3s ease; /* Efek transisi untuk bayangan */
}

.dropdown-menu:hover {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15); /* Bayangan lebih gelap saat hover */
}

.dropdown-item {
    padding: 10px 15px; /* Padding dalam item dropdown */
    color: #343a40; /* Warna teks item dropdown */
    text-decoration: none; /* Menghilangkan garis bawah */
    font-size: 0.9rem; /* Ukuran font lebih kecil untuk item dropdown */
}

.dropdown-item:hover {
    background-color: #f8f9fa; /* Latar belakang saat hover pada item */
    color: #007bff; /* Warna teks saat hover */
}

/* Styling untuk tombol delete */
.dropdown-item button {
    color: #dc3545; /* Warna merah untuk tombol delete */
    background-color: transparent;
    border: none;
    padding: 0;
    font-size: 0.9rem;
    text-align: left;
}


/* Styling untuk kolom dengan tindakan (aksi) */
.table td:last-child {
    width: 200px; /* Menentukan lebar tetap untuk kolom aksi */
    text-align: center;
}

/* Mengatur lebar tabel agar tidak terpotong */
.table-responsive {
    overflow-x: auto; /* Membuat tabel bisa scroll secara horizontal jika lebar melebihi kontainer */
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
            <h1 class="m-0"><i class="fa-solid fa-magnifying-glass-chart me-2"></i>Analisis Jabatan</h1>
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
            <button type="button" class="btn btn-primary mb-3" style="margin-top: 12px;" data-toggle="modal" data-target="#createAnalisisJabatanModal">
                                <i class="fa-solid fa-circle-plus"></i>
                            </button>
                        <div class="modal fade" id="createAnalisisJabatanModal" tabindex="-1" role="dialog" aria-labelledby="createAnalisisJabatanModal" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="createAnalisisJabatanModal">Tambah Analisis Jabatan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @if($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif

                                                                    <form action="{{ route('analisisjabatan.store') }}" method="POST">
                                                                        @csrf

                                                                        <!-- Form untuk memilih jabatan -->
                                                                        <div class="mb-3">
                                                                            <label for="id_jabatan" class="form-label">Jabatan:</label>
                                                                            <select name="id_jabatan" id="id_jabatan" class="form-select" required>
                                                                                <option value="" disabled selected>Pilih Jabatan</option>
                                                                                @foreach($jabatans as $jabatan)
                                                                                    <option value="{{ $jabatan->id_jabatan }}" data-kode="{{ $jabatan->kode_jabatan }}" data-nama="{{ $jabatan->nama_jabatan }}">
                                                                                        {{ $jabatan->nama_jabatan }} ({{ $jabatan->kode_jabatan }})
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="kode_jabatan" class="form-label">Kode Jabatan:</label>
                                                                            <input type="text" name="kode_jabatan" id="kode_jabatan" class="form-control" readonly>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="nama_jabatan" class="form-label">Nama Jabatan:</label>
                                                                            <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control" readonly>
                                                                        </div>

                                                                        <!-- Form untuk kolom lainnya -->
                                                                        <div class="mb-3">
                                                                            <label for="ikhtisar_jabatan" class="form-label">Ikhtisar Jabatan</label>
                                                                            <input type="text" id="ikhtisar_jabatan" name="ikhtisar_jabatan" class="form-control" required>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="objek_kerja" class="form-label">Objek Kerja</label>
                                                                            <input type="text" id="objek_kerja" name="objek_kerja" class="form-control" required>
                                                                        </div>

                                                                        <!-- Form Baru dengan Judul Tugas -->
                                                                        <div id="tugas-container">
                                                                            <div class="card mb-3 task-form">
                                                                                <div class="card-header">
                                                                                    <h5 class="mb-0">Tugas</h5>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="mb-3">
                                                                                        <label for="uraian_tugas_1" class="form-label">Uraian Tugas</label>
                                                                                        <input type="text" id="uraian_tugas_1" name="uraian_tugas[]" class="form-control" required>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="langkah_kerja_1" class="form-label">Langkah Kerja</label>
                                                                                        <input type="text" id="langkah_kerja_1" name="langkah_kerja[]" class="form-control">
                                                                                    </div>
                                                                                    <div class="row g-3">
                                                                                        <div class="col-md-3">
                                                                                            <div class="mb-3">
                                                                                                <label for="hasil_kerja_1" class="form-label">Hasil Kerja</label>
                                                                                                <input type="text" id="hasil_kerja_1" name="hasil_kerja[]" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <div class="mb-3">
                                                                                                <label for="satuan_1" class="form-label">Satuan</label>
                                                                                                <select id="satuan_1" name="satuan[]" class="form-select" required>
                                                                                                    <option value="Dokumen">Dokumen</option>
                                                                                                    <option value="Peraturan">Peraturan</option>
                                                                                                    <option value="Standar operasional Plaksanaan">Standar operasional Plaksanaan</option>
                                                                                                    <option value="Informasi">Informasi</option>
                                                                                                    <option value="Surat">Surat</option>
                                                                                                    <option value="Memo">Memo</option>
                                                                                                    <option value="Laporan">Laporan</option>
                                                                                                    <option value="Data">Data</option>
                                                                                                    <option value="Berkas">Berkas</option>
                                                                                                    <option value="Kegiatan">Kegiatan</option>
                                                                                                    <option value="Daftar">Daftar</option>
                                                                                                    <option value="Jabatan">Jabatan</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <div class="mb-3">
                                                                                                <label for="waktu_permenit_1" class="form-label">Waktu (Menit)</label>
                                                                                                <input type="number" id="waktu_permenit_1" name="waktu_permenit[]" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <div class="mb-3">
                                                                                                <label for="jumlah_1" class="form-label">Jumlah</label>
                                                                                                <input type="number" id="jumlah_1" name="jumlah[]" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-end mb-3">
                                                                            <button type="button" class="btn btn-primary" id="add-task-btn">Tambah Tugas</button>
                                                                        </div>
                                                                        <hr id="separator">

                                                                        <div class="mb-3">
                                                                            <label for="tanggung_jawab" class="form-label">Tanggung Jawab</label>
                                                                            <input type="text" id="tanggung_jawab" name="tanggung_jawab" class="form-control" required>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="wewenang" class="form-label">Wewenang</label>
                                                                            <input type="text" id="wewenang" name="wewenang" class="form-control" required>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="perangkat_kerja" class="form-label">Perangkat Kerja</label>
                                                                            <input type="text" id="perangkat_kerja" name="perangkat_kerja" class="form-control" required>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="bahan_kerja" class="form-label">Bahan Kerja</label>
                                                                            <input type="text" id="bahan_kerja" name="bahan_kerja" class="form-control" required>
                                                                        </div>

                                                                        <!-- Korelasi Jabatan -->
                                                                        <div id="korelasi-container">
                                                                            <div class="card mb-3 korelasi-form">
                                                                                <div class="card-header">
                                                                                    <h5 class="mb-0">Korelasi Jabatan</h5>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row g-3">
                                                                                        <div class="col-md-4">
                                                                                            <div class="mb-3">
                                                                                                <label for="hubungandenganjabatan_1" class="form-label">Hubungan Dengan Jabatan</label>
                                                                                                <input type="text" id="hubungandenganjabatan_1" name="hubungandenganjabatan[]" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="mb-3">
                                                                                                <label for="perihal_1" class="form-label">Perihal</label>
                                                                                                <input type="text" id="perihal_1" name="perihal[]" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="mb-3">
                                                                                                <label for="unit_kerja_1" class="form-label">Unit Kerja</label>
                                                                                                <input type="text" id="unit_kerja_1" name="unit_kerja[]" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-end mb-3">
                                                                            <button type="button" class="btn btn-primary" id="add-korelasi-btn">Tambah Korelasi Jabatan</button>
                                                                        </div>
                                                                        <hr id="separator">

                                                                        <!-- Form yang tersisa -->

                                                                        <!-- Resiko Bahaya -->
                                                                        <div id="resiko-bahaya-container">
                                                                            <div class="card mb-3 bahaya-form">
                                                                                <div class="card-header">
                                                                                    <h5 class="mb-0">Resiko Bahaya</h5>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row g-3">
                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="bahaya_fisikataumental_1" class="form-label">Bahaya Fisik / Mental</label>
                                                                                                <input type="text" id="bahaya_fisikataumental_1" name="bahaya_fisikataumental[]" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="mb-3">
                                                                                                <label for="penyebab_1" class="form-label">Penyebab</label>
                                                                                                <input type="text" id="penyebab_1" name="penyebab[]" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-end mb-3">
                                                                            <button type="button" class="btn btn-primary" id="add-bahaya-btn">Tambah Resiko Bahaya</button>
                                                                        </div>
                                                                        <hr id="separator">

                                                                        <!-- Kondisi Lingkungan Kerja -->
                                                                        <div class="card mb-3">
                                                                            <div class="card-header">
                                                                                <h5 class="mb-0">Kondisi Lingkungan Kerja</h5>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="mb-3">
                                                                                    <label for="tempat_kerja" class="form-label">Tempat Kerja</label>
                                                                                    <input type="text" id="tempat_kerja" name="tempat_kerja" class="form-control" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="suhu" class="form-label">Suhu</label>
                                                                                    <input type="text" id="suhu" name="suhu" class="form-control" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="udara" class="form-label">Udara</label>
                                                                                    <input type="text" id="udara" name="udara" class="form-control" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="keadaan_ruangan" class="form-label">Keadaan Ruangan</label>
                                                                                    <input type="text" id="keadaan_ruangan" name="keadaan_ruangan" class="form-control" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="letak" class="form-label">Letak</label>
                                                                                    <input type="text" id="letak" name="letak" class="form-control" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="penerangan" class="form-label">Penerangan</label>
                                                                                    <input type="text" id="penerangan" name="penerangan" class="form-control" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="suara" class="form-label">Suara</label>
                                                                                    <input type="text" id="suara" name="suara" class="form-control" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="keadaan_tempatkerja" class="form-label">Keadaan Tempat Kerja</label>
                                                                                    <input type="text" id="keadaan_tempatkerja" name="keadaan_tempatkerja" class="form-control" required>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="getaran" class="form-label">Getaran</label>
                                                                                    <input type="text" id="getaran" name="getaran" class="form-control" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="rekomendasi" class="form-label">Rekomendasi</label>
                                                                            <input type="text" id="rekomendasi" name="rekomendasi" class="form-control" required>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="prestasi" class="form-label">Prestasi</label>
                                                                            <input type="text" id="prestasi" name="prestasi" class="form-control">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="butir_informasilainnya" class="form-label">Butir Informasi Lainnya</label>
                                                                            <input type="text" id="butir_informasilainnya" name="butir_informasilainnya" class="form-control" required>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="kelas_jabatan" class="form-label">Kelas Jabatan</label>
                                                                            <select id="kelas_jabatan" name="kelas_jabatan" class="form-select" required>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                                <option value="13">13</option>
                                                                                <option value="14">14</option>
                                                                                <option value="15">15</option>
                                                                                <option value="16">16</option>
                                                                                <option value="17">17</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                    <button type="submit" class="btn btn-primary">Simpan Jabatan</button>
                                                                                                </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @if(session('success'))
                                                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                                {{ session('success') }}
                                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                            </div>
                                                                        @endif

                                                                        @if($errors->any())
                                                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                                <ul>
                                                                                    @foreach ($errors->all() as $error)
                                                                                        <li>{{ $error }}</li>
                                                                                    @endforeach
                                                                                </ul>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                            </div>
                                                                        @endif
            <table class="table table-bordered">
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
                    @foreach($analisisJabatan as $anjab)
                        <tr>
                            <td>{{ $anjab->kode_jabatan }}</td>
                            <td>{{ $anjab->jabatan->jenis_jabatan }}</td>
                            <td>{{ $anjab->nama_jabatan }}</td>
                            <td>{{ $anjab->jabatan->unit_kerja }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Detail
                                    </button>
                                    <div class="dropdown-menu text-center" style="margin-right: 50px;">
                                        <a class="dropdown-item" href="{{ route('analisisjabatan.show', $anjab->id_anjab) }}">Lihat Data</a>
                                        <form action="{{ route('analisisjabatan.destroy', $anjab->id_anjab) }}" method="POST" style="display:inline;">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('id_jabatan').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            document.getElementById('kode_jabatan').value = selectedOption.getAttribute('data-kode');
            document.getElementById('nama_jabatan').value = selectedOption.getAttribute('data-nama');
        });
    </script>
    <script>
        let taskCount = 1;

        document.getElementById('add-task-btn').addEventListener('click', function() {
            taskCount++;
            const newTask = document.createElement('div');
            newTask.classList.add('card', 'mb-3', 'task-form');
            newTask.innerHTML = `
                <div class="card-body">
                    <div class="mb-3">
                        <label for="uraian_tugas_${taskCount}" class="form-label">Uraian Tugas</label>
                        <input type="text" id="uraian_tugas_${taskCount}" name="uraian_tugas[]" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="langkah_kerja_${taskCount}" class="form-label">Langkah Kerja</label>
                        <input type="text" id="langkah_kerja_${taskCount}" name="langkah_kerja[]" class="form-control">
                    </div>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="hasil_kerja_${taskCount}" class="form-label">Hasil Kerja</label>
                                <input type="text" id="hasil_kerja_${taskCount}" name="hasil_kerja[]" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="satuan_${taskCount}" class="form-label">Satuan</label>
                                <select id="satuan_${taskCount}" name="satuan[]" class="form-select" required>
                                    <option value="Dokumen">Dokumen</option>
                                    <option value="Peraturan">Peraturan</option>
                                    <option value="Standar operasional Plaksanaan">Standar operasional Plaksanaan</option>
                                    <option value="Informasi">Informasi</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Memo">Memo</option>
                                    <option value="Laporan">Laporan</option>
                                    <option value="Data">Data</option>
                                    <option value="Berkas">Berkas</option>
                                    <option value="Kegiatan">Kegiatan</option>
                                    <option value="Daftar">Daftar</option>
                                    <option value="Jabatan">Jabatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="waktu_permenit_${taskCount}" class="form-label">Waktu (Menit)</label>
                                <input type="number" id="waktu_permenit_${taskCount}" name="waktu_permenit[]" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="jumlah_${taskCount}" class="form-label">Jumlah</label>
                                <input type="number" id="jumlah_${taskCount}" name="jumlah[]" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger btn-sm remove-task-btn">Hapus</button>
                    </div>
                </div>
            `;
            document.getElementById('tugas-container').appendChild(newTask);
        });

        document.getElementById('tugas-container').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-task-btn')) {
                e.target.closest('.task-form').remove();
            }
        });
    </script>
    <script>
        let korelasiCount = 1;

        document.getElementById('add-korelasi-btn').addEventListener('click', function() {
            korelasiCount++;
            const newKorelasi = document.createElement('div');
            newKorelasi.classList.add('card', 'mb-3', 'korelasi-form');
            newKorelasi.innerHTML = `
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="hubungandenganjabatan_${korelasiCount}" class="form-label">Hubungan Dengan Jabatan</label>
                                <input type="text" id="hubungandenganjabatan_${korelasiCount}" name="hubungandenganjabatan[]" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="perihal_${korelasiCount}" class="form-label">Perihal</label>
                                <input type="text" id="perihal_${korelasiCount}" name="perihal[]" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="unit_kerja_${korelasiCount}" class="form-label">Unit Kerja</label>
                                <input type="text" id="unit_kerja_${korelasiCount}" name="unit_kerja[]" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger btn-sm remove-korelasi-btn">Hapus</button>
                    </div>
                </div>
            `;
            document.getElementById('korelasi-container').appendChild(newKorelasi);
        });

        document.getElementById('korelasi-container').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-korelasi-btn')) {
                e.target.closest('.korelasi-form').remove();
            }
        });
    </script>
    <script>
        let bahayaCount = 1;

        document.getElementById('add-bahaya-btn').addEventListener('click', function() {
            bahayaCount++;
            const newBahaya = document.createElement('div');
            newBahaya.classList.add('card', 'mb-3', 'bahaya-form');
            newBahaya.innerHTML = `
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bahaya_fisikataumental_${bahayaCount}" class="form-label">Bahaya Fisik / Mental</label>
                                <input type="text" id="bahaya_fisikataumental_${bahayaCount}" name="bahaya_fisikataumental[]" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="penyebab_${bahayaCount}" class="form-label">Penyebab</label>
                                <input type="text" id="penyebab_${bahayaCount}" name="penyebab[]" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-danger btn-sm remove-bahaya-btn">Hapus</button>
                    </div>
                </div>
            `;
            document.getElementById('resiko-bahaya-container').appendChild(newBahaya);
        });

        document.getElementById('resiko-bahaya-container').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-bahaya-btn')) {
                e.target.closest('.bahaya-form').remove();
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
