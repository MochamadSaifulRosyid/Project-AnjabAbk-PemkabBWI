<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Analisis Jabatan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 800px;
        }
        .card {
            border-radius: 8px;
            border: 1px solid #dee2e6;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 8px 8px 0 0;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control, .form-select {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .text-danger {
            font-size: 0.875em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Tambah Analisis Jabatan</h4>
            </div>
            <div class="card-body">
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
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

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
</body>
</html>
