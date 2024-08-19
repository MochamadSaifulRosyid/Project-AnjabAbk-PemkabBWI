<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <div class="card-header">
                <h4 class="mb-0">Tambah Data User</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" required>
                        @error('username') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="example@gmail.com" required>
                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                        @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="unit_organisasi" class="form-label">Unit Organisasi</label>
                        <select name="unit_organisasi" id="unit_organisasi" class="form-select">
                            <option value="" disabled selected>-- Select Unit --</option>
                            @foreach ([
                                'Sekretariat Daerah', 'Bagian Pemerintahan', 'Bagian Pemerintahaan Desa', 'Bagian Hukum',
                                'Bagian Organisasi', 'Bagian Perekonomian', 'Bagian Kesejahteraan Rakyat', 'Bagian Pengadaan Barang dan Jasa',
                                'Bagian Perencanaan dan Keuangan', 'Bagian Umum', 'Bagian Protokol dan Komunikasi Pimpinan'
                            ] as $unit)
                                <option value="{{ $unit }}" {{ old('unit_organisasi') == $unit ? 'selected' : '' }}>{{ $unit }}</option>
                            @endforeach
                        </select>
                        @error('unit_organisasi') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
