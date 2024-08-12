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
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="page-title">Detail Analisis Jabatan</h1>

        <div class="card">
            <div class="card-header">
                Informasi Analisis Jabatan
            </div>
            <div class="card-body">
                <form>
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

                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="mb-0">Tugas</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="uraianTugas" class="col-sm-3 col-form-label form-label">Uraian Tugas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="uraianTugas" value="{{ $analisisjabatan->uraian_tugas }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="langkahKerja" class="col-sm-3 col-form-label form-label">Langkah Kerja</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="langkahKerja" value="{{ $analisisjabatan->langkah_kerja }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hasilKerja" class="col-sm-3 col-form-label form-label">Hasil Kerja</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="hasilKerja" value="{{ $analisisjabatan->hasil_kerja }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="satuan" class="col-sm-3 col-form-label form-label">Satuan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="satuan" value="{{ $analisisjabatan->satuan }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="waktuPerMenit" class="col-sm-3 col-form-label form-label">Waktu per Menit</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="waktuPerMenit" value="{{ $analisisjabatan->waktu_permenit }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jumlah" class="col-sm-3 col-form-label form-label">Jumlah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="jumlah" value="{{ $analisisjabatan->jumlah }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

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

                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="mb-0">Korelasi Jabatan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="hubunganDenganJabatan" class="col-sm-3 col-form-label form-label">Hubungan Dengan Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="hubunganDenganJabatan" value="{{ $analisisjabatan->hubungandenganjabatan }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="perihal" class="col-sm-3 col-form-label form-label">Perihal</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="perihal" value="{{ $analisisjabatan->perihal }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="unitKerja" class="col-sm-3 col-form-label form-label">Unit Kerja</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="unitKerja" value="{{ $analisisjabatan->unit_kerja }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="mb-0">Resiko Bahaya</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="bahayaFisikMental" class="col-sm-3 col-form-label form-label">Bahaya Fisik atau Mental</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="bahayaFisikMental" value="{{ $analisisjabatan->bahaya_fisikataumental }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="penyebab" class="col-sm-3 col-form-label form-label">Penyebab</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control-plaintext" id="penyebab" value="{{ $analisisjabatan->penyebab }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

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

                    <div class="d-flex">
                        <a href="{{ route('analisisjabatan.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('analisisjabatan.edit', $analisisjabatan->id_jabatan) }}" class="btn btn-warning ms-2">Edit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
