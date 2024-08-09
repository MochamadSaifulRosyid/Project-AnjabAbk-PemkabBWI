<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jabatan</title>
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
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="page-title">Detail Jabatan</h1>

        <div class="card">
            <div class="card-header">
                Informasi Jabatan
            </div>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $jabatan->id_jabatan }}</h5>

                <p class="card-text"><strong>Kode Jabatan:</strong> {{ $jabatan->kode_jabatan }}</p>
                <p class="card-text"><strong>Jenis Jabatan:</strong> {{ $jabatan->jenis_jabatan }}</p>
                <p class="card-text"><strong>Nama Jabatan:</strong> {{ $jabatan->nama_jabatan }}</p>
                <p class="card-text"><strong>Unit Kerja:</strong> {{ $jabatan->unit_kerja }}</p>
                <p class="card-text"><strong>Status Jabatan:</strong> {{ $jabatan->status_jabatan }}</p>

                <a href="{{ route('jabatan.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
                <a href="{{ route('jabatan.edit', $jabatan->id_jabatan) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('jabatan.destroy', $jabatan->id_jabatan) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
