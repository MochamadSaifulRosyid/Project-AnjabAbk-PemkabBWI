<!-- resources/views/jabatan/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Light background color for better contrast */
        }
        .form-container {
            max-width: 600px;
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
                <h1>Edit Jabatan</h1>
            </div>
            <form action="{{ route('jabatan.update', $jabatan->id_jabatan) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                    <input type="text" id="kode_jabatan" class="form-control" value="{{ old('kode_jabatan', $jabatan->kode_jabatan) }}" readonly>
                    @error('kode_jabatan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jenis_jabatan" class="form-label">Jenis Jabatan</label>
                    <select name="jenis_jabatan" id="jenis_jabatan" class="form-select" required>
                        <option value="struktural" {{ old('jenis_jabatan', $jabatan->jenis_jabatan) == 'struktural' ? 'selected' : '' }}>Struktural</option>
                        <option value="fungsional" {{ old('jenis_jabatan', $jabatan->jenis_jabatan) == 'fungsional' ? 'selected' : '' }}>Fungsional</option>
                        <option value="pelaksana" {{ old('jenis_jabatan', $jabatan->jenis_jabatan) == 'pelaksana' ? 'selected' : '' }}>Pelaksana</option>
                    </select>
                    @error('jenis_jabatan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control" value="{{ old('nama_jabatan', $jabatan->nama_jabatan) }}" required>
                    @error('nama_jabatan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="unit_kerja" class="form-label">Unit Kerja</label>
                    <input type="text" name="unit_kerja" id="unit_kerja" class="form-control" value="{{ old('unit_kerja', $jabatan->unit_kerja) }}" required>
                    @error('unit_kerja')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Form untuk Eselon -->
                <div class="mb-3">
                    <label for="eselon" class="form-label">Eselon</label>
                    <select name="eselon" id="eselon" class="form-select" required>
                        <option value="" disabled>Pilih Eselon</option>
                        <option value="Eselon 1A / Jabatan Pimpinan Tinggi Utama" {{ old('eselon', $jabatan->eselon) == 'Eselon 1A / Jabatan Pimpinan Tinggi Utama' ? 'selected' : '' }}>Eselon 1A / Jabatan Pimpinan Tinggi Utama</option>
                        <option value="Eselon 1B / Jabatan Pimpinan Tinggi Madya" {{ old('eselon', $jabatan->eselon) == 'Eselon 1B / Jabatan Pimpinan Tinggi Madya' ? 'selected' : '' }}>Eselon 1B / Jabatan Pimpinan Tinggi Madya</option>
                        <option value="Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya" {{ old('eselon', $jabatan->eselon) == 'Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya' ? 'selected' : '' }}>Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya</option>
                        <option value="Eselon 2A / Jabatan Pimpinan Tinggi Pratama" {{ old('eselon', $jabatan->eselon) == 'Eselon 2A / Jabatan Pimpinan Tinggi Pratama' ? 'selected' : '' }}>Eselon 2A / Jabatan Pimpinan Tinggi Pratama</option>
                        <option value="Eselon 2B / Jabatan Pimpinan Tinggi Pratama" {{ old('eselon', $jabatan->eselon) == 'Eselon 2B / Jabatan Pimpinan Tinggi Pratama' ? 'selected' : '' }}>Eselon 2B / Jabatan Pimpinan Tinggi Pratama</option>
                        <option value="Eselon 3A / Jabatan Administrator" {{ old('eselon', $jabatan->eselon) == 'Eselon 3A / Jabatan Administrator' ? 'selected' : '' }}>Eselon 3A / Jabatan Administrator</option>
                        <option value="Eselon 3B / Jabatan Administrator" {{ old('eselon', $jabatan->eselon) == 'Eselon 3B / Jabatan Administrator' ? 'selected' : '' }}>Eselon 3B / Jabatan Administrator</option>
                        <option value="Eselon 4A / Jabatan Pengawas" {{ old('eselon', $jabatan->eselon) == 'Eselon 4A / Jabatan Pengawas' ? 'selected' : '' }}>Eselon 4A / Jabatan Pengawas</option>
                        <option value="Eselon 4B / Jabatan Pengawas" {{ old('eselon', $jabatan->eselon) == 'Eselon 4B / Jabatan Pengawas' ? 'selected' : '' }}>Eselon 4B / Jabatan Pengawas</option>
                        <option value="Jabatan Pelaksana" {{ old('eselon', $jabatan->eselon) == 'Jabatan Pelaksana' ? 'selected' : '' }}>Jabatan Pelaksana</option>
                        <option value="Eselon 4A / Jabatan Pengawas (F)" {{ old('eselon', $jabatan->eselon) == 'Eselon 4A / Jabatan Pengawas (F)' ? 'selected' : '' }}>Eselon 4A / Jabatan Pengawas (F)</option>
                        <option value="Kelompok" {{ old('eselon', $jabatan->eselon) == 'Kelompok' ? 'selected' : '' }}>Kelompok</option>
                        <option value="Sub Kelompok" {{ old('eselon', $jabatan->eselon) == 'Sub Kelompok' ? 'selected' : '' }}>Sub Kelompok</option>
                    </select>
                    @error('eselon')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status_jabatan" class="form-label">Status Jabatan</label>
                    <select name="status_jabatan" id="status_jabatan" class="form-select" required>
                        <option value="aktif" {{ old('status_jabatan', $jabatan->status_jabatan) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="nonaktif" {{ old('status_jabatan', $jabatan->status_jabatan) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                    @error('status_jabatan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
