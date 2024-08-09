<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Custom styling */
        .page-title {
            color: #343a40; /* Dark color for title */
        }
        .table thead {
            background-color: #343a40; /* Dark background for table header */
            color: #ffffff; /* White text color for header */
        }
        .table th, .table td {
            vertical-align: middle; /* Align text vertically in table cells */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="page-title mb-4">Daftar Jabatan</h1>
        
        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success mb-3">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add new jabatan button -->
        <a href="{{ route('jabatan.create') }}" class="btn btn-primary mb-3">Tambah Jabatan</a>

        <!-- Table to display jabatan list -->
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Jabatan</th>
                    <th>Jenis Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>Status Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jabatans as $jabatan)
                    <tr>
                        <td>{{ $jabatan->id_jabatan }}</td>
                        <td>{{ $jabatan->kode_jabatan }}</td>
                        <td>{{ $jabatan->jenis_jabatan }}</td>
                        <td>{{ $jabatan->nama_jabatan }}</td>
                        <td>{{ $jabatan->unit_kerja }}</td>
                        <td>{{ $jabatan->status_jabatan }}</td>
                        <td>
                            <a href="{{ route('jabatan.show', $jabatan->id_jabatan) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('jabatan.edit', $jabatan->id_jabatan) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('jabatan.destroy', $jabatan->id_jabatan) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Link to Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


