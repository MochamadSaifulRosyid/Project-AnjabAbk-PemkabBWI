<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Syarat Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <h1 class="page-title">Detail Syarat Jabatan</h1>

        <div class="card">
            <div class="card-header">
                Informasi Syarat Jabatan
            </div>
            <div class="card-body">
                <h5 class="card-title">ID: {{ $syaratjabatan->id_syaratjabatan }}</h5>

                <p class="card-text"><strong>Jabatan:</strong> {{ $syaratjabatan->jabatan->nama_jabatan }}</p>
                <p class="card-text"><strong>Kode Jabatan:</strong> {{ $syaratjabatan->kode_jabatan }}</p>
                <p class="card-text"><strong>Nama Jabatan:</strong> {{ $syaratjabatan->nama_jabatan }}</p>
                <p class="card-text"><strong>Pengetahuan Kerja:</strong> {{ $syaratjabatan->pengetahuan_kerja }}</p>
                <p class="card-text"><strong>Keterampilan Kerja:</strong> {{ $syaratjabatan->keterampilan_kerja }}</p>
                <p class="card-text"><strong>Pengalaman Kerja:</strong> {{ $syaratjabatan->pengalaman_kerja }}</p>
                <p class="card-text"><strong>Bakat Kerja:</strong> {{ $syaratjabatan->bakat_kerja }}</p>
                <p class="card-text"><strong>Tempramen Kerja:</strong> {{ $syaratjabatan->tempramen_kerja }}</p>
                <p class="card-text"><strong>Minat Kerja:</strong> {{ $syaratjabatan->minat_kerja }}</p>
                <p class="card-text"><strong>Upaya Fisik:</strong> {{ $syaratjabatan->upaya_fisik }}</p>
                <p class="card-text"><strong>Hubungan Jabatan dengan Data:</strong> {{ $syaratjabatan->hubunganjabatan_dengandata }}</p>
                <p class="card-text"><strong>Hubungan Jabatan dengan Orang:</strong> {{ $syaratjabatan->hubunganjabatan_denganorang }}</p>
                <p class="card-text"><strong>Hubungan Jabatan dengan Benda:</strong> {{ $syaratjabatan->hubunganjabatan_denganbenda }}</p>
                <p class="card-text"><strong>Jenjang Minimal:</strong> {{ $syaratjabatan->jenjang_minimal }}</p>
                <p class="card-text"><strong>Jurusan:</strong> {{ $syaratjabatan->jurusan }}</p>
                <p class="card-text"><strong>Pelatihan Fungsional:</strong> {{ $syaratjabatan->pelatihan_fungsional }}</p>
                <p class="card-text"><strong>Pelatihan Teknik:</strong> {{ $syaratjabatan->pelatihan_teknik }}</p>
                <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $syaratjabatan->jenis_kelamin }}</p>
                <p class="card-text"><strong>Umur per Tahun:</strong> {{ $syaratjabatan->umur_pertahun }}</p>
                <p class="card-text"><strong>Tinggi Badan (cm):</strong> {{ $syaratjabatan->tinggibadan_percm }}</p>
                <p class="card-text"><strong>Berat Badan (kg):</strong> {{ $syaratjabatan->beratbadan_perkg }}</p>
                <p class="card-text"><strong>Postur Badan:</strong> {{ $syaratjabatan->posturbadan }}</p>
                <p class="card-text"><strong>Penampilan:</strong> {{ $syaratjabatan->penampilan }}</p>
                
                <a href="{{ route('syaratjabatan.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
                <a href="{{ route('syaratjabatan.edit', $syaratjabatan->id_syaratjabatan) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('syaratjabatan.destroy', $syaratjabatan->id_syaratjabatan) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
