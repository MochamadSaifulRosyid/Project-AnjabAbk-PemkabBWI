<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Syarat Jabatan</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link to custom CSS (optional) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Custom styling */
        .page-title {
            color: #343a40; /* Dark color for title */
            font-size: 2rem; /* Increase font size for the title */
            margin-bottom: 1.5rem; /* Margin below title */
        }
        .alert {
            margin-bottom: 1.5rem; /* Margin below alert */
        }
        .btn {
            margin-right: 0.5rem; /* Margin to the right of buttons */
        }
        .table thead {
            background-color: #343a40; /* Dark background for table header */
            color: #ffffff; /* White text color for header */
        }
        .table tbody tr:hover {
            background-color: #f1f1f1; /* Light gray background on hover */
        }
        .table th, .table td {
            vertical-align: middle; /* Align text vertically in table cells */
            text-align: center; /* Center align text in table cells */
        }
        .table-bordered {
            border: 1px solid #dee2e6; /* Border for the table */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="page-title">Daftar Syarat Jabatan</h1>
        
        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add new syarat jabatan button -->
        <a href="{{ route('syaratjabatan.create') }}" class="btn btn-primary mb-3">Tambah Syarat Jabatan</a>

        <!-- Table to display syarat jabatan list -->
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jabatan</th>
                    <th>Kode Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($syaratJabatan as $syarat)
                    <tr>
                        <td>{{ $syarat->id_syaratjabatan }}</td>
                        <td>{{ $syarat->jabatan->nama_jabatan }}</td>
                        <td>{{ $syarat->kode_jabatan }}</td>
                        <td>{{ $syarat->nama_jabatan }}</td>
                        <td>
                            <a href="{{ route('syaratjabatan.show', $syarat->id_syaratjabatan) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('syaratjabatan.edit', $syarat->id_syaratjabatan) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('syaratjabatan.destroy', $syarat->id_syaratjabatan) }}" method="POST" style="display:inline;">
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
