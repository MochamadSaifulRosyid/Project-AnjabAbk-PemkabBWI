<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Analisis Jabatan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
                    background-color: #f8f9fa; /* Light background color for better contrast */
                }
                .form-container {
                    max-width: 900px;
                    margin: 50px auto;
                    padding: 20px;
                    background-color: #ffffff; /* White background for the form container */
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for better visual separation */
                }
                .form-header {
                    margin-bottom: 20px;
                    border-bottom: 2px solid #007bff; /* Accent border for the header */
                    padding-bottom: 10px;
                }
                .form-header h1 {
                    font-size: 1.5rem;
                    color: #007bff; /* Accent color for the header */
                }
                .form-group {
                    margin-bottom: 1rem;
                }
                .form-label {
                    font-weight: 600; /* Slightly bold labels */
                }
                .btn-primary {
                    background-color: #007bff;
                    border: none;
                }
                .btn-primary:hover {
                    background-color: #0056b3;
                }
                .text-danger {
                    font-size: 0.875rem; /* Smaller error text */
                }
    </style>
</head>
<body>
    <div class="container">
            <div class="form-container">
                <div class="form-header">
                    <h1>Edit Analisis Jabatan</h1>
                </div>
                <form action="{{ route('analisisjabatan.update', $analisisjabatan->id_anjab) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="kode_jabatan">Kode Jabatan</label>
                        <input type="text" id="kode_jabatan" name="kode_jabatan" class="form-control" value="{{ $analisisjabatan->kode_jabatan }}" readonly>
                    </div>

            <div class="mb-3">
                <label for="nama_jabatan">Nama Jabatan</label>
                <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" value="{{ $analisisjabatan->nama_jabatan }}" readonly>
            </div>

            <div class="mb-3">
                <label for="ikhtisar_jabatan">Ikhtisar Jabatan</label>
                <input type="text" id="ikhtisar_jabatan" name="ikhtisar_jabatan" class="form-control" value="{{ $analisisjabatan->ikhtisar_jabatan }}" required>
            </div>

            <div class="mb-3">
                <label for="objek_kerja">Objek Kerja</label>
                <input type="text" id="objek_kerja" name="objek_kerja" class="form-control" value="{{ $analisisjabatan->objek_kerja }}" required>
            </div>

            <!-- Form Baru dengan Judul Tugas -->
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Tugas</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="uraian_tugas" class="form-label">Uraian Tugas</label>
                        <input type="text" id="uraian_tugas" name="uraian_tugas" class="form-control" value="{{ $analisisjabatan->uraian_tugas }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="langkah_kerja" class="form-label">Langkah Kerja</label>
                        <input type="text" id="langkah_kerja" name="langkah_kerja" class="form-control" value="{{ $analisisjabatan->langkah_kerja }}" required>
                    </div>

                    <!-- Layout menyamping untuk hasil_kerja sampai jumlah -->
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="hasil_kerja" class="form-label">Hasil Kerja</label>
                                <input type="text" id="hasil_kerja" name="hasil_kerja" class="form-control" value="{{ $analisisjabatan->hasil_kerja }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <select id="satuan" name="satuan" class="form-select" value="{{ $analisisjabatan->satuan }}" required>
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
                                <label for="waktu_permenit" class="form-label">Waktu (Menit)</label>
                                <input type="number" id="waktu_permenit" name="waktu_permenit" class="form-control" value="{{ $analisisjabatan->waktu_permenit }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" id="jumlah" name="jumlah" class="form-control" value="{{ $analisisjabatan->jumlah }}" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="tanggung_jawab">Tanggung Jawab</label>
                <input type="text" id="tanggung_jawab" name="tanggung_jawab" class="form-control" value="{{ $analisisjabatan->tanggung_jawab }}" required>
            </div>

            <div class="form-group">
                <label for="wewenang">Wewenang</label>
                <input type="text" id="wewenang" name="wewenang" class="form-control" value="{{ $analisisjabatan->wewenang }}" required>
            </div>

            <div class="form-group">
                <label for="perangkat_kerja">Perangkat Kerja</label>
                <input type="text" id="perangkat_kerja" name="perangkat_kerja" class="form-control" value="{{ $analisisjabatan->perangkat_kerja }}" required>
            </div>

            <div class="form-group">
                <label for="bahan_kerja">Bahan Kerja</label>
                <input type="text" id="bahan_kerja" name="bahan_kerja" class="form-control" value="{{ $analisisjabatan->bahan_kerja }}" required>
            </div>

            <!-- Korelasi Jabatan -->
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Korelasi Jabatan</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="hubungandenganjabatan" class="form-label">Hubungan Dengan Jabatan</label>
                                <input type="text" id="hubungandenganjabatan" name="hubungandenganjabatan" class="form-control" value="{{ $analisisjabatan->hubungandenganjabatan }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="perihal" class="form-label">Perihal</label>
                                <input type="text" id="perihal" name="perihal" class="form-control" value="{{ $analisisjabatan->perihal }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="unit_kerja" class="form-label">Unit Kerja</label>
                                <input type="text" id="unit_kerja" name="unit_kerja" class="form-control" value="{{ $analisisjabatan->unit_kerja }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resiko Bahaya -->
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Resiko Bahaya</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bahaya_fisikataumental" class="form-label">Bahaya Fisik / Mental</label>
                                <input type="text" id="bahaya_fisikataumental" name="bahaya_fisikataumental" class="form-control" value="{{ $analisisjabatan->bahaya_fisikataumental }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="penyebab" class="form-label">Penyebab</label>
                                <input type="text" id="penyebab" name="penyebab" class="form-control" value="{{ $analisisjabatan->penyebab }}" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kondisi Lingkungan Kerja -->
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Kondisi Lingkungan Kerja</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="tempat_kerja" class="form-label">Tempat Kerja</label>
                        <input type="text" id="tempat_kerja" name="tempat_kerja" class="form-control" value="{{ $analisisjabatan->tempat_kerja }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="suhu" class="form-label">Suhu</label>
                        <input type="text" id="suhu" name="suhu" class="form-control" value="{{ $analisisjabatan->suhu }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="udara" class="form-label">Udara</label>
                        <input type="text" id="udara" name="udara" class="form-control" value="{{ $analisisjabatan->udara }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="keadaan_ruangan" class="form-label">Keadaan Ruangan</label>
                        <input type="text" id="keadaan_ruangan" name="keadaan_ruangan" class="form-control" value="{{ $analisisjabatan->keadaan_ruangan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="letak" class="form-label">Letak</label>
                        <input type="text" id="letak" name="letak" class="form-control" value="{{ $analisisjabatan->letak }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="penerangan" class="form-label">Penerangan</label>
                        <input type="text" id="penerangan" name="penerangan" class="form-control" value="{{ $analisisjabatan->penerangan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="suara" class="form-label">Suara</label>
                        <input type="text" id="suara" name="suara" class="form-control" value="{{ $analisisjabatan->suara }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="keadaan_tempatkerja" class="form-label">Keadaan Tempat Kerja</label>
                        <input type="text" id="keadaan_tempatkerja" name="keadaan_tempatkerja" class="form-control" value="{{ $analisisjabatan->keadaan_tempatkerja }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="getaran" class="form-label">Getaran</label>
                        <input type="text" id="getaran" name="getaran" class="form-control" value="{{ $analisisjabatan->getaran }}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="rekomendasi">Rekomendasi</label>
                <input type="text" id="rekomendasi" name="rekomendasi" class="form-control" value="{{ $analisisjabatan->rekomendasi }}" required>
            </div>

            <div class="form-group">
                <label for="prestasi">Prestasi</label>
                <input type="text" id="prestasi" name="prestasi" class="form-control" value="{{ $analisisjabatan->prestasi }}">
            </div>

            <div class="form-group">
                <label for="butir_informasilainnya">Butir Informasi Lainnya</label>
                <input type="text" id="butir_informasilainnya" name="butir_informasilainnya" class="form-control" value="{{ $analisisjabatan->butir_informasilainnya }}" required>
            </div>

            <div class="form-group">
                <label for="kelas_jabatan">Kelas Jabatan</label>
                <select id="kelas_jabatan" name="kelas_jabatan" class="form-control" required>
                    <option value="1" {{ $analisisjabatan->kelas_jabatan == 1 ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $analisisjabatan->kelas_jabatan == 2 ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $analisisjabatan->kelas_jabatan == 3 ? 'selected' : '' }}>3</option>
                    <option value="1" {{ $analisisjabatan->kelas_jabatan == 4 ? 'selected' : '' }}>4</option>
                    <option value="2" {{ $analisisjabatan->kelas_jabatan == 5 ? 'selected' : '' }}>5</option>
                    <option value="3" {{ $analisisjabatan->kelas_jabatan == 6 ? 'selected' : '' }}>6</option>
                    <option value="1" {{ $analisisjabatan->kelas_jabatan == 7 ? 'selected' : '' }}>7</option>
                    <option value="2" {{ $analisisjabatan->kelas_jabatan == 8 ? 'selected' : '' }}>8</option>
                    <option value="3" {{ $analisisjabatan->kelas_jabatan == 9 ? 'selected' : '' }}>9</option>
                    <option value="1" {{ $analisisjabatan->kelas_jabatan == 10 ? 'selected' : '' }}>10</option>
                    <option value="2" {{ $analisisjabatan->kelas_jabatan == 11 ? 'selected' : '' }}>11</option>
                    <option value="3" {{ $analisisjabatan->kelas_jabatan == 12 ? 'selected' : '' }}>12</option>
                    <option value="3" {{ $analisisjabatan->kelas_jabatan == 13 ? 'selected' : '' }}>13</option>
                    <option value="1" {{ $analisisjabatan->kelas_jabatan == 14 ? 'selected' : '' }}>14</option>
                    <option value="2" {{ $analisisjabatan->kelas_jabatan == 15 ? 'selected' : '' }}>15</option>
                    <option value="3" {{ $analisisjabatan->kelas_jabatan == 16 ? 'selected' : '' }}>16</option>
                    <option value="17" {{ $analisisjabatan->kelas_jabatan == 17 ? 'selected' : '' }}>17</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>
</html>
