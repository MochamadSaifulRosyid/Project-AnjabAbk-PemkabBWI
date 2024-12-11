<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Analisis Jabatan</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link to custom CSS (optional) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .container {
                    padding: 20px;
                    border-radius: 10px;
                    background-color: #343a40;
                    border: none;
                }
        .page-title {
            color: #343a40; /* Dark color for title */
            font-size: 2rem; /* Increase font size for the title */
            margin-bottom: 1.5rem; /* Margin below title */
        }
        .card-header {
            background-color: #343a40; /* Dark background for card header */
            color: #ffffff; /* White text color for header */
        }
        .btn {
            margin-right: 0.5rem; /* Margin to the right of buttons */
        }
        .form-label {
            font-weight: bold;
            background-color: #f8f9fa;
            padding: 0.5rem;
            border-radius: 0.25rem;
        }
        .form-control-plaintext {
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.5rem;
        }
        .form-text {
    margin-top: 0.25rem; /* Mengatur jarak atas teks hasil */
    margin-bottom: 0; /* Menghilangkan margin bawah jika ada */
    margin-left: 5px;
}

    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="page-title" style="color: white">Detail Analisis Jabatan</h1>
        <div class="card">
            <div class="card-header">
                Informasi Analisis Jabatan
            </div>
            <div class="card-body">
                <form >
                    <div class="" style="margin-left: 10px;">
                        <div class="row mb-3">
                            <label for="idJabatan" class="col-sm-3 col-form-label form-label">ID Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="idJabatan" value="{{ $analisisjabatan->id_jabatan }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kodeJabatan" class="col-sm-3 col-form-label form-label">Kode Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="kodeJabatan" value="{{ $analisisjabatan->kode_jabatan }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="namaJabatan" class="col-sm-3 col-form-label form-label">Nama Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="namaJabatan" value="{{ $analisisjabatan->nama_jabatan }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ikhtisarJabatan" class="col-sm-3 col-form-label form-label">Ikhtisar Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="ikhtisarJabatan" value="{{ $analisisjabatan->ikhtisar_jabatan }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="objekKerja" class="col-sm-3 col-form-label form-label">Objek Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="objekKerja" value="{{ $analisisjabatan->objek_kerja }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        @php
                            $uraian_tugas = explode(',', $analisisjabatan->uraian_tugas);
                            $langkah_kerja = explode(',', $analisisjabatan->langkah_kerja);
                            $hasil_kerja = explode(',', $analisisjabatan->hasil_kerja);
                            $satuan = explode(',', $analisisjabatan->satuan);
                            $waktu_permenit = explode(',', $analisisjabatan->waktu_permenit);
                            $jumlah = explode(',', $analisisjabatan->jumlah);
                        @endphp
                        @for ($i = 0; $i < count($uraian_tugas); $i++)
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Tugas {{ $i + 1 }}</h5>
                            </div>
                            <div class="card-body">
                                <!-- Uraian Tugas -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label me-2" style="width: 150px;">Uraian Tugas</label>
                                    <p class="mb-0">{{ $uraian_tugas[$i] }}</p>
                                </div>

                                <!-- Langkah Kerja -->
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label me-2" style="width: 150px;">Langkah Kerja</label>
                                    <p class="mb-0">{{ $langkah_kerja[$i] }}</p>
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Hasil Kerja</label>
                                            <p class="form-text">{{ $hasil_kerja[$i] }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Satuan</label>
                                            <p class="form-text">{{ $satuan[$i] }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Waktu (Menit)</label>
                                            <p class="form-text">{{ $waktu_permenit[$i] }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Jumlah</label>
                                            <p class="form-text">{{ $jumlah[$i] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>



                    <hr id="separator">

                    <div class="" style="margin-left: 10px;">
                        <div class="row mb-3">
                            <label for="tanggungJawab" class="col-sm-3 col-form-label form-label">Tanggung Jawab</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="tanggungJawab" value="{{ $analisisjabatan->tanggung_jawab }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="wewenang" class="col-sm-3 col-form-label form-label">Wewenang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="wewenang" value="{{ $analisisjabatan->wewenang }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="perangkatKerja" class="col-sm-3 col-form-label form-label">Perangkat Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="perangkatKerja" value="{{ $analisisjabatan->perangkat_kerja }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bahanKerja" class="col-sm-3 col-form-label form-label">Bahan Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="bahanKerja" value="{{ $analisisjabatan->bahan_kerja }}" readonly>
                            </div>
                        </div>
                    </div>


                    <div class="">
                        @php
                            $hubungandenganjabatan = explode(',', $analisisjabatan->hubungandenganjabatan);
                            $perihal = explode(',', $analisisjabatan->perihal);
                            $unit_kerja = explode(',', $analisisjabatan->unit_kerja);
                        @endphp
                        @for ($i = 0; $i < count($hubungandenganjabatan); $i++)
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Korelasi Jabatan {{ $i + 1 }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Hubungan Dengan Jabatan</label>
                                            <p class="form-text">{{ $hubungandenganjabatan[$i] }}</p> <!-- Menggunakan form-text untuk gaya konsisten -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Perihal</label>
                                            <p class="form-text">{{ $perihal[$i] }}</p> <!-- Menggunakan form-text untuk gaya konsisten -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Unit Kerja</label>
                                            <p class="form-text">{{ $unit_kerja[$i] }}</p> <!-- Menggunakan form-text untuk gaya konsisten -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <hr id="separator">

                    <div class="">
                        @php
                            $bahaya_fisikataumental = explode(',', $analisisjabatan->bahaya_fisikataumental);
                            $penyebab = explode(',', $analisisjabatan->penyebab);
                        @endphp
                        @for ($i = 0; $i < count($bahaya_fisikataumental); $i++)
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Resiko Bahaya {{ $i + 1 }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Bahaya Fisik / Mental</label>
                                            <p class="form-text">{{ $bahaya_fisikataumental[$i] }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Penyebab</label>
                                            <p class="form-text">{{ $penyebab[$i] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <hr id="separator">

                    <div class="">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Kondisi Lingkungan Kerja</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label for="tempatKerja" class="col-sm-3 col-form-label form-label">Tempat Kerja</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="tempatKerja" value="{{ $analisisjabatan->tempat_kerja }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="suhu" class="col-sm-3 col-form-label form-label">Suhu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="suhu" value="{{ $analisisjabatan->suhu }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="udara" class="col-sm-3 col-form-label form-label">Udara</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="udara" value="{{ $analisisjabatan->udara }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="keadaanRuangan" class="col-sm-3 col-form-label form-label">Keadaan Ruangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="keadaanRuangan" value="{{ $analisisjabatan->keadaan_ruangan }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="letak" class="col-sm-3 col-form-label form-label">Letak</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="letak" value="{{ $analisisjabatan->letak }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="penerangan" class="col-sm-3 col-form-label form-label">Penerangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="penerangan" value="{{ $analisisjabatan->penerangan }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="suara" class="col-sm-3 col-form-label form-label">Suara</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="suara" value="{{ $analisisjabatan->suara }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="keadaanTempatKerja" class="col-sm-3 col-form-label form-label">Keadaan Tempat Kerja</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="keadaanTempatKerja" value="{{ $analisisjabatan->keadaan_tempatkerja }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="getaran" class="col-sm-3 col-form-label form-label">Getaran</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="getaran" value="{{ $analisisjabatan->getaran }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="" style="margin-left: 10px;">
                        <div class="row mb-3">
                            <label for="rekomendasi" class="col-sm-3 col-form-label form-label">Rekomendasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="rekomendasi" value="{{ $analisisjabatan->rekomendasi }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prestasi" class="col-sm-3 col-form-label form-label">Prestasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="prestasi" value="{{ $analisisjabatan->prestasi }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="butirInformasiLainnya" class="col-sm-3 col-form-label form-label">Butir Informasi Lainnya</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="butirInformasiLainnya" value="{{ $analisisjabatan->butir_informasilainnya }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="kelasJabatan" class="col-sm-3 col-form-label form-label">Kelas Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control-plaintext" id="kelasJabatan" value="{{ $analisisjabatan->kelas_jabatan }}" readonly>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex">
                        <a href="{{ route('analisisjabatan.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('analisisjabatan.edit', $analisisjabatan->id_anjab) }}" class="btn btn-warning ms-2">Edit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
