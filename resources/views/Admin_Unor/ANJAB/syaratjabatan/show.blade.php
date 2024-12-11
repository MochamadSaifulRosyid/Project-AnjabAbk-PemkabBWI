<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Syarat Jabatan</title>
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
            color: #343a40;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
        .card-header {
            background-color: #343a40;
            color: #ffffff;
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
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            width: 100%; /* Ensure it takes full width */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }
        .form-control-plaintext.textarea {
            height: 150px; /* Adjust height as needed */
            overflow: auto; /* Allow scrolling if the content exceeds the height */
        }
        .mb-3 {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="page-title" style="color: white">Detail Syarat Jabatan</h1>

        <div class="card">
            <div class="card-header">
                Informasi Syarat Jabatan
            </div>
            <div class="card-body">
                <form>
                    <!-- ID Syarat Jabatan -->
                    <div class="row mb-3">
                        <label for="idSyaratJabatan" class="col-sm-4 col-form-label form-label">ID Syarat Jabatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="idSyaratJabatan" value="{{ $syaratjabatan->id_syaratjabatan }}" readonly>
                        </div>
                    </div>

                    <!-- Jabatan -->
                    <div class="row mb-3">
                        <label for="jabatan" class="col-sm-4 col-form-label form-label">Jabatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="jabatan" value="{{ $syaratjabatan->jabatan->nama_jabatan }}" readonly>
                        </div>
                    </div>

                    <!-- Kode Jabatan -->
                    <div class="row mb-3">
                        <label for="kodeJabatan" class="col-sm-4 col-form-label form-label">Kode Jabatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="kodeJabatan" value="{{ $syaratjabatan->kode_jabatan }}" readonly>
                        </div>
                    </div>

                    <!-- Nama Jabatan -->
                    <div class="row mb-3">
                        <label for="namaJabatan" class="col-sm-4 col-form-label form-label">Nama Jabatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="namaJabatan" value="{{ $syaratjabatan->nama_jabatan }}" readonly>
                        </div>
                    </div>

                    <!-- Pengetahuan Kerja -->
                    <div class="row mb-3">
                        <label for="pengetahuanKerja" class="col-sm-4 col-form-label form-label">Pengetahuan Kerja</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="pengetahuanKerja" value="{{ $syaratjabatan->pengetahuan_kerja }}" readonly>
                        </div>
                    </div>

                    <!-- Keterampilan Kerja -->
                    <div class="row mb-3">
                        <label for="keterampilanKerja" class="col-sm-4 col-form-label form-label">Keterampilan Kerja</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="keterampilanKerja" value="{{ $syaratjabatan->keterampilan_kerja }}" readonly>
                        </div>
                    </div>

                    <!-- Pengalaman Kerja -->
                    <div class="row mb-3">
                        <label for="pengalamanKerja" class="col-sm-4 col-form-label form-label">Pengalaman Kerja</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="pengalamanKerja" value="{{ $syaratjabatan->pengalaman_kerja }}" readonly>
                        </div>
                    </div>

                    <!-- Bakat Kerja -->
                    <div class="row mb-3">
                        <label for="bakatKerja" class="col-sm-4 col-form-label form-label">Bakat Kerja</label>
                        <div class="col-sm-8">
                            @php
                                $bakatKerja = json_decode($syaratjabatan->bakat_kerja, true);
                            @endphp
                            <ul class="list-unstyled">
                                @if(is_array($bakatKerja) && !empty($bakatKerja))
                                    @foreach($bakatKerja as $index => $item)
                                        <li>{{ $index + 1 }}. {{ $item }}</li>
                                    @endforeach
                                @else
                                    <li>Tidak ada data</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <!-- Tempramen Kerja -->
                    <div class="row mb-3">
                        <label for="tempramenKerja" class="col-sm-4 col-form-label form-label">Tempramen Kerja</label>
                        <div class="col-sm-8">
                            @php
                                $tempramenKerja = json_decode($syaratjabatan->tempramen_kerja, true);
                            @endphp
                            <ul class="list-unstyled">
                                @if(is_array($tempramenKerja) && !empty($tempramenKerja))
                                    @foreach($tempramenKerja as $index => $item)
                                        <li>{{ $index + 1 }}. {{ $item }}</li>
                                    @endforeach
                                @else
                                    <li>Tidak ada data</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <!-- Minat Kerja -->
                    <div class="row mb-3">
                        <label for="minatKerja" class="col-sm-4 col-form-label form-label">Minat Kerja</label>
                        <div class="col-sm-8">
                            @php
                                $minatKerja = json_decode($syaratjabatan->minat_kerja, true);
                            @endphp
                            <ul class="list-unstyled">
                                @if(is_array($minatKerja) && !empty($minatKerja))
                                    @foreach($minatKerja as $index => $item)
                                        <li>{{ $index + 1 }}. {{ $item }}</li>
                                    @endforeach
                                @else
                                    <li>Tidak ada data</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <!-- Upaya Fisik -->
                    <div class="row mb-3">
                        <label for="upayaFisik" class="col-sm-4 col-form-label form-label">Upaya Fisik</label>
                        <div class="col-sm-8">
                            @php
                                $upayaFisik = json_decode($syaratjabatan->upaya_fisik, true);
                            @endphp
                            <ul class="list-unstyled">
                                @if(is_array($upayaFisik) && !empty($upayaFisik))
                                    @foreach($upayaFisik as $index => $item)
                                        <li>{{ $index + 1 }}. {{ $item }}</li>
                                    @endforeach
                                @else
                                    <li>Tidak ada data</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <!-- Hubungan Jabatan dengan Data -->
                    <div class="row mb-3">
                        <label for="hubunganJabatanData" class="col-sm-4 col-form-label form-label">Hubungan Jabatan dengan Data</label>
                        <div class="col-sm-8">
                            @php
                                $hubunganJabatanData = json_decode($syaratjabatan->hubunganjabatan_dengandata, true);
                            @endphp
                            <ul class="list-unstyled">
                                @if(is_array($hubunganJabatanData) && !empty($hubunganJabatanData))
                                    @foreach($hubunganJabatanData as $index => $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                @else
                                    <li>Tidak ada data</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <!-- Hubungan Jabatan dengan Orang -->
                    <div class="row mb-3">
                        <label for="hubunganJabatanOrang" class="col-sm-4 col-form-label form-label">Hubungan Jabatan dengan Orang</label>
                        <div class="col-sm-8">
                            @php
                                $hubunganJabatanOrang = json_decode($syaratjabatan->hubunganjabatan_denganorang, true);
                            @endphp
                            <ul class="list-unstyled">
                                @if(is_array($hubunganJabatanOrang) && !empty($hubunganJabatanOrang))
                                    @foreach($hubunganJabatanOrang as $index => $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                @else
                                    <li>Tidak ada data</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <!-- Hubungan Jabatan dengan Benda -->
                    <div class="row mb-3">
                        <label for="hubunganJabatanBenda" class="col-sm-4 col-form-label form-label">Hubungan Jabatan dengan Benda</label>
                        <div class="col-sm-8">
                            @php
                                $hubunganJabatanBenda = json_decode($syaratjabatan->hubunganjabatan_denganbenda, true);
                            @endphp
                            <ul class="list-unstyled">
                                @if(is_array($hubunganJabatanBenda) && !empty($hubunganJabatanBenda))
                                    @foreach($hubunganJabatanBenda as $index => $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                @else
                                    <li>Tidak ada data</li>
                                @endif
                            </ul>
                        </div>
                    </div>


                    <!-- Jenjang Minimal -->
                    <div class="row mb-3">
                        <label for="jenjangMinimal" class="col-sm-4 col-form-label form-label">Jenjang Minimal</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="jenjangMinimal" value="{{ $syaratjabatan->jenjang_minimal }}" readonly>
                        </div>
                    </div>

                    <!-- Jurusan -->
                    <div class="row mb-3">
                        <label for="jurusan" class="col-sm-4 col-form-label form-label">Jurusan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="jurusan" value="{{ $syaratjabatan->jurusan }}" readonly>
                        </div>
                    </div>

                    <!-- Pelatihan Fungsional -->
                    <div class="row mb-3">
                        <label for="pelatihanFungsional" class="col-sm-4 col-form-label form-label">Pelatihan Fungsional</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="pelatihanFungsional" value="{{ $syaratjabatan->pelatihan_fungsional }}" readonly>
                        </div>
                    </div>

                    <!-- Pelatihan Teknik -->
                    <div class="row mb-3">
                        <label for="pelatihanTeknik" class="col-sm-4 col-form-label form-label">Pelatihan Teknik</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="pelatihanTeknik" value="{{ $syaratjabatan->pelatihan_teknik }}" readonly>
                        </div>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="row mb-3">
                        <label for="jenisKelamin" class="col-sm-4 col-form-label form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="jenisKelamin" value="{{ $syaratjabatan->jenis_kelamin }}" readonly>
                        </div>
                    </div>

                    <!-- Umur per Tahun -->
                    <div class="row mb-3">
                        <label for="umurPertahun" class="col-sm-4 col-form-label form-label">Umur per Tahun</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="umurPertahun" value="{{ $syaratjabatan->umur_pertahun }}" readonly>
                        </div>
                    </div>

                    <!-- Tinggi Badan -->
                    <div class="row mb-3">
                        <label for="tinggiBadan" class="col-sm-4 col-form-label form-label">Tinggi Badan (cm)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="tinggiBadan" value="{{ $syaratjabatan->tinggibadan_percm }}" readonly>
                        </div>
                    </div>

                    <!-- Berat Badan -->
                    <div class="row mb-3">
                        <label for="beratBadan" class="col-sm-4 col-form-label form-label">Berat Badan (kg)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="beratBadan" value="{{ $syaratjabatan->beratbadan_perkg }}" readonly>
                        </div>
                    </div>

                    <!-- Postur Badan -->
                    <div class="row mb-3">
                        <label for="posturBadan" class="col-sm-4 col-form-label form-label">Postur Badan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="posturBadan" value="{{ $syaratjabatan->posturbadan }}" readonly>
                        </div>
                    </div>

                    <!-- Penampilan -->
                    <div class="row mb-3">
                        <label for="penampilan" class="col-sm-4 col-form-label form-label">Penampilan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" id="penampilan" value="{{ $syaratjabatan->penampilan }}" readonly>
                        </div>
                    </div>

                    <div class="d-flex mt-3">
                        <a href="{{ route('syaratjabatan.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
                        <a href="{{ route('syaratjabatan.edit', $syaratjabatan->id_syaratjabatan) }}" class="btn btn-warning ms-2" style="margin-right: 8px;">Edit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A3M4F5wGAK+3zC8gFJ3mdfPp5N2P7QKJh5N0yJc8U5F5EV9jlL4J+PjA1G2do" crossorigin="anonymous"></script>
</body>
</html>
