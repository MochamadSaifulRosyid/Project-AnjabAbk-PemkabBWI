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
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="page-title" style="color: white">Detail Jabatan</h1>

        <div class="card">
            <div class="card-header">
                Informasi Jabatan
            </div>
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <label for="idJabatan" class="col-sm-3 col-form-label form-label">ID Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext" id="idJabatan" value="{{ $jabatan->id_jabatan }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kodeJabatan" class="col-sm-3 col-form-label form-label">Kode Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext" id="kodeJabatan" value="{{ $jabatan->kode_jabatan }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jenisJabatan" class="col-sm-3 col-form-label form-label">Jenis Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext" id="jenisJabatan" value="{{ $jabatan->jenis_jabatan }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                                            <label for="jenjang" class="col-sm-3 col-form-label form-label">Jenjang</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control-plaintext" id="jenjang" value="{{ $jabatan->jenjang }}" readonly>
                                            </div>
                                        </div>

                    <div class="row mb-3">
                        <label for="namaJabatan" class="col-sm-3 col-form-label form-label">Nama Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext" id="namaJabatan" value="{{ $jabatan->nama_jabatan }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="eselon" class="col-sm-3 col-form-label form-label">Eselon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext" id="eselon" value="{{ $jabatan->eselon }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="unitKerja" class="col-sm-3 col-form-label form-label">Unit Kerja</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext" id="unitKerja" value="{{ $jabatan->unit_kerja }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="statusJabatan" class="col-sm-3 col-form-label form-label">Status Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext" id="statusJabatan" value="{{ $jabatan->status_jabatan }}" readonly>
                        </div>
                    </div>

                    <a href="{{ route('jabatan.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
                    <a href="{{ route('jabatan.edit', $jabatan->id_jabatan) }}" class="btn btn-warning">Edit</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
