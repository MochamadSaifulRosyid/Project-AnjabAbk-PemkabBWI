<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jabatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
        }
        .card {
            border-radius: 8px;
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
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-header">
                <h4 class="mb-0">Tambah Jabatan</h4>
            </div>
            <div class="card-body">
                <form id="jabatanForm" action="{{ route('jabatan.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
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

                    <div class="mb-3">
                        <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                        <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control" value="{{ old('nama_jabatan') }}" required>
                        @error('nama_jabatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="unit_kerja" class="form-label">Unit Kerja</label>
                        <input type="text" name="unit_kerja" id="unit_kerja" class="form-control" value="{{ old('unit_kerja') }}" required>
                        @error('unit_kerja')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Form untuk Eselon -->
                    <div class="mb-3">
                        <label for="eselon" class="form-label">Eselon</label>
                        <select name="eselon" id="eselon" class="form-select" required>
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

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
