<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jabatan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Assuming you have a CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Tambah Jabatan</h1>
        <form action="{{ route('jabatan.store') }}" method="POST">
            @csrf
            <!-- Kode Jabatan dihapus dari form -->
            <div class="form-group">
                <label for="jenis_jabatan">Jenis Jabatan</label>
                <select name="jenis_jabatan" id="jenis_jabatan" class="form-control" required>
                    <option value="setruktural" {{ old('jenis_jabatan') == 'setruktural' ? 'selected' : '' }}>Struktural</option>
                    <option value="fungsional" {{ old('jenis_jabatan') == 'fungsional' ? 'selected' : '' }}>Fungsional</option>
                    <option value="pelaksana" {{ old('jenis_jabatan') == 'pelaksana' ? 'selected' : '' }}>Pelaksana</option>
                </select>
                @error('jenis_jabatan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_jabatan">Nama Jabatan</label>
                <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control" value="{{ old('nama_jabatan') }}" required>
                @error('nama_jabatan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="unit_kerja">Unit Kerja</label>
                <input type="text" name="unit_kerja" id="unit_kerja" class="form-control" value="{{ old('unit_kerja') }}" required>
                @error('unit_kerja')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status_jabatan">Status Jabatan</label>
                <select name="status_jabatan" id="status_jabatan" class="form-control" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
