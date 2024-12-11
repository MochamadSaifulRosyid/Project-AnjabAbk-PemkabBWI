<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ANJAB-ABK | Jabatan</title>

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
        background-color: #f8f9fa;
    }

    .jabatan {
        margin-left: 20px;
    }
    .details {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .details div {
        margin-right: 5px; /* Jarak antar deskripsi */
    }
    a {
    text-decoration: none;
    }
.table thead {
    background-color: #343a40; /* Background gelap untuk header tabel */
    color: #ffffff; /* Warna teks putih untuk header */
}

.table th, .table td {
    vertical-align: middle; /* Menyelaraskan teks secara vertikal di dalam sel tabel */
}
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
.list-group-item {
        border: none;
        border-radius: 0.5rem;
        background-color: #ffffff;
        margin-bottom: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 10px 20px;
    }
    .list-group-item:hover {
        background-color: #e9ecef;
    }

.rotate-icon i {
    transition: transform 0.3s ease;
}

.rotate-icon[aria-expanded="true"] i {
    transform: rotate(90deg);
}
   /* Default style untuk elemen jenjang */
   #fungsional {
       display: inline-block;
       padding: 2px 5px;
       border-radius: 5px;
       margin-left: 5px;
       font-size: 12px;
       line-height: 1;
       font-weight: bold;
       color: white;
       position: relative;
       top: -5px;
   }

   /* Warna berdasarkan tingkatan */
   .fungsional-tidak-ada {
       background-color: #d3d3d3; /* Abu-abu (rendah) */
   }

   .fungsional-pelaksana-pemula {
       background-color: #b0c4de; /* Biru muda */
   }

   .fungsional-pelaksana {
       background-color: #87cefa; /* Biru langit */
   }

   .fungsional-pelaksana-lanjutan {
       background-color: #00bfff; /* Biru */
   }

   .fungsional-terampil {
       background-color: #32cd32; /* Hijau terang */
   }

   .fungsional-mahir {
       background-color: #228b22; /* Hijau tua */
   }

   .fungsional-ahli-pertama {
       background-color: #ffd700; /* Kuning emas */
   }

   .fungsional-ahli-muda {
       background-color: #ffa500; /* Oranye */
   }

   .fungsional-ahli-madya {
       background-color: #ff4500; /* Oranye kemerahan */
   }

   .fungsional-ahli-utama {
       background-color: #8b0000; /* Merah tua (tinggi) */
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
            <h1 class="m-0"><i class="fa-solid fa-map-pin me-2"></i>Data Jabatan</h1>
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

        <!-- Button untuk menampilkan modal, hanya muncul jika tidak ada jabatan yang terkait dengan user -->
        @if($jabatans->isEmpty())
        <button type="button" class="btn btn-primary mt-3 mb-3" style="margin-left: 12px" data-toggle="modal" data-target="#createJabatanModal">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </button>
        @endif




        <!-- Modal Form -->
        <div class="modal fade" id="createJabatanModal" tabindex="-1" role="dialog" aria-labelledby="createJabatanModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createJabatanModalLabel">Tambah Jabatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('jabatan.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <!-- Input jenis jabatan -->
                                                        <div class="form-group">
                                                                                <label for="jenis_jabatan" class="form-label">Jenis Jabatan</label>
                                                                                <select name="jenis_jabatan" id="jenis_jabatan" class="form-select" required>
                                                                                    <option value="" disabled selected>Pilih Jenis Jabatan</option>
                                                                                    <option value="struktural" {{ old('jenis_jabatan') == 'struktural' ? 'selected' : '' }}>Struktural</option>
                                                                                    <option value="fungsional" {{ old('jenis_jabatan') == 'fungsional' ? 'selected' : '' }}>Fungsional</option>
                                                                                    <option value="pelaksana" {{ old('jenis_jabatan') == 'pelaksana' ? 'selected' : '' }}>Pelaksana</option>
                                                                                </select>
                                                                                @error('jenis_jabatan')
                                                                                    <div class="text-danger">{{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                            <!-- Dropdown untuk memilih jabatan yang ada di bawah jabatan lain -->
                                                        <div class="form-group">
                                                            <label for="dibawah_jabatan">Dibawah Jabatan</label>
                                                            <select name="dibawah_jabatan" id="dibawah_jabatan" class="form-control" Readonly>
                                                                <option value="">Pilih Jabatan</option>
                                                                @foreach($parentJabatans as $parentJabatan)
                                                                    <option value="{{ $parentJabatan->id_jabatan }}">
                                                                        {{ $parentJabatan->nama_jabatan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>



                            <!-- Input nama jabatan -->
                            <div class="form-group">
                                <label for="nama_jabatan">Nama Jabatan</label>
                                <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" required>
                            </div>

                            <!-- Input unit kerja -->
                            <div class="form-group">
                                <label for="unit_kerja">Unit Kerja</label>
                                <input type="text" class="form-control" id="unit_kerja" name="unit_kerja" required>
                            </div>

                            <!-- Form untuk Jenjang -->
                                                <div class="form-group" id="jenjangForm" style="display: none;">
                                                    <label for="jenjang" class="form-label">Jenjang</label>
                                                    <select name="jenjang" id="jenjang" class="form-select">
                                                        <option value="">Pilih Jenjang</option>
                                                        <option value="Mahir" {{ old('jenjang') == 'Mahir' ? 'selected' : '' }}>Mahir</option>
                                                        <option value="Terampil" {{ old('jenjang') == 'Terampil' ? 'selected' : '' }}>Terampil</option>
                                                        <option value="Pelaksana Lanjutan" {{ old('jenjang') == 'Pelaksana Lanjutan' ? 'selected' : '' }}>Pelaksana Lanjutan</option>
                                                        <option value="Pelaksana" {{ old('jenjang') == 'Pelaksana' ? 'selected' : '' }}>Pelaksana</option>
                                                        <option value="Pelaksana Pemula" {{ old('jenjang') == 'Pelaksana Pemula' ? 'selected' : '' }}>Pelaksana Pemula</option>
                                                        <option value="Ahli Pertama" {{ old('jenjang') == 'Ahli Pertama' ? 'selected' : '' }}>Ahli Pertama</option>
                                                        <option value="Ahli Muda" {{ old('jenjang') == 'Ahli Muda' ? 'selected' : '' }}>Ahli Muda</option>
                                                        <option value="Ahli Madya" {{ old('jenjang') == 'Ahli Madya' ? 'selected' : '' }}>Ahli Madya</option>
                                                        <option value="Ahli Utama" {{ old('jenjang') == 'Ahli Utama' ? 'selected' : '' }}>Ahli Utama</option>
                                                        <option value="Tidak Ada" {{ old('jenjang') == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                                                    </select>
                                                    @error('jenjang')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                            <!-- Form untuk Eselon -->
                                                <div class="form-group" id="eselonForm">
                                                    <label for="eselon" class="form-label">Eselon</label>
                                                    <select name="eselon" id="eselon" class="form-select">
                                                        <option value="">Pilih Eselon</option>
                                                        <option value="Eselon 1A / Jabatan Pimpinan Tinggi Utama" {{ old('eselon') == 'Eselon 1A / Jabatan Pimpinan Tinggi Utama' ? 'selected' : '' }}>Eselon 1A / Jabatan Pimpinan Tinggi Utama</option>
                                                        <option value="Eselon 1B / Jabatan Pimpinan Tinggi Madya" {{ old('eselon') == 'Eselon 1B / Jabatan Pimpinan Tinggi Madya' ? 'selected' : '' }}>Eselon 1B / Jabatan Pimpinan Tinggi Madya</option>
                                                        <option value="Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya" {{ old('eselon') == 'Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya' ? 'selected' : '' }}>Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya</option>
                                                        <option value="Eselon 2A / Jabatan Pimpinan Tinggi Pratama" {{ old('eselon') == 'Eselon 2A / Jabatan Pimpinan Tinggi Pratama' ? 'selected' : '' }}>Eselon 2A / Jabatan Pimpinan Tinggi Pratama</option>
                                                        <option value="Eselon 2B / Jabatan Pimpinan Tinggi Pratama" {{ old('eselon') == 'Eselon 2B / Jabatan Pimpinan Tinggi Pratama' ? 'selected' : '' }}>Eselon 2B / Jabatan Pimpinan Tinggi Pratama</option>
                                                        <option value="Eselon 3A / Jabatan Administrator" {{ old('eselon') == 'Eselon 3A / Jabatan Administrator' ? 'selected' : '' }}>Eselon 3A / Jabatan Administrator</option>
                                                        <option value="Eselon 3B / Jabatan Administrator" {{ old('eselon') == 'Eselon 3B / Jabatan Administrator' ? 'selected' : '' }}>Eselon 3B / Jabatan Administrator</option>
                                                        <option value="Eselon 4A / Jabatan Pengawas" {{ old('eselon') == 'Eselon 4A / Jabatan Pengawas' ? 'selected' : '' }}>Eselon 4A / Jabatan Pengawas</option>
                                                        <option value="Eselon 4B / Jabatan Pengawas" {{ old('eselon') == 'Eselon 4B / Jabatan Pengawas' ? 'selected' : '' }}>Eselon 4B / Jabatan Pengawas</option>
                                                        <option value="Jabatan Pelaksana" {{ old('eselon') == 'Jabatan Pelaksana' ? 'selected' : '' }}>Jabatan Pelaksana</option>
                                                        <option value="Eselon 4A / Jabatan Pengawas (F)" {{ old('eselon') == 'Eselon 4A / Jabatan Pengawas (F)' ? 'selected' : '' }}>Eselon 4A / Jabatan Pengawas (F)</option>
                                                        <option value="Kelompok" {{ old('eselon') == 'Kelompok' ? 'selected' : '' }}>Kelompok</option>
                                                        <option value="Sub Kelompok" {{ old('eselon') == 'Sub Kelompok' ? 'selected' : '' }}>Sub Kelompok</option>
                                                    </select>
                                                    @error('eselon')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!-- Form untuk Status Jabatan -->
                                                <div class="mb-3">
                                                    <label for="status_jabatan" class="form-label">Status Jabatan</label>
                                                    <select name="status_jabatan" id="status_jabatan" class="form-select" required>
                                                        <option value="" disabled selected>Pilih Status Jabatan</option>
                                                        <option value="aktif" {{ old('status_jabatan') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                                        <option value="nonaktif" {{ old('status_jabatan') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                                    </select>
                                                    @error('status_jabatan')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan Jabatan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 12px;">
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
                <tr>
                    <th>Nama Jabatan</th>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            @foreach($jabatans as $jabatan)
                                @if(is_null($jabatan->dibawah_jabatan))
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong>
                                                    {{ $jabatan->nama_jabatan }}
                                                    <sup id="fungsional"
                                                         class="fungsional-{{ strtolower(str_replace(' ', '-', $jabatan->jenjang)) }}">
                                                        {{ $jabatan->jenjang }}
                                                    </sup>
                                                </strong>

                                            </div>
                                            <div class="btn-group ms-auto">
                                                <button type="button" class="btn rotate-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-chevron-right"></i>
                                                </button>
                                                <ul class="dropdown-menu text-center">
                                                    <i class="fa-solid fa-circle-plus" data-id_jabatan="{{ $jabatan->id_jabatan }}" data-toggle="modal" data-target="#createJabatanModal"></i>
                                                    <li><a class="dropdown-item" href="{{ route('jabatan.show', $jabatan->id_jabatan) }}">Detail Data</a></li>
                                                    <form action="{{ route('jabatan.destroy', $jabatan->id_jabatan) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="jabatan">
                                            @if($jabatan->anakJabatans->isNotEmpty())
                                                @include('Admin_Unor.ANJAB.jabatan.jabatan_list', ['anakJabatans' => $jabatan->anakJabatans])
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </td>
                </tr>
            </table>
        </div>

    </section>
<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus jabatan ini?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

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
    document.addEventListener('DOMContentLoaded', function () {
        const jenisJabatan = document.getElementById('jenis_jabatan');
        const jenjangForm = document.getElementById('jenjangForm');
        const eselonForm = document.getElementById('eselonForm');

        function updateForm() {
            if (jenisJabatan.value === 'fungsional') {
                jenjangForm.style.display = 'block';
                eselonForm.style.display = 'none';
            } else {
                jenjangForm.style.display = 'none';
                eselonForm.style.display = 'block';
            }
        }

        jenisJabatan.addEventListener('change', updateForm);
        updateForm();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const createJabatanModal = document.getElementById('createJabatanModal');
        const dibawahJabatanSelect = createJabatanModal.querySelector('#dibawah_jabatan');

        // Saat tombol tambah diklik
        document.querySelectorAll('.fa-circle-plus').forEach(button => {
            button.addEventListener('click', () => {
                // Ambil id_jabatan dari tombol yang diklik
                const idJabatan = button.getAttribute('data-id_jabatan');

                // Pilih opsi yang sesuai di dropdown
                if (idJabatan) {
                    dibawahJabatanSelect.value = idJabatan;
                } else {
                    dibawahJabatanSelect.value = ""; // Kosongkan jika tidak ada
                }
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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


