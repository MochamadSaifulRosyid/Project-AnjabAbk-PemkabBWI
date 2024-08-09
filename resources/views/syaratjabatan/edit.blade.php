<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Form untuk mengedit syarat jabatan.">
    <meta name="author" content="Your Name">
    <title>Edit Syarat Jabatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control-plaintext {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Syarat Jabatan</h1>
        <form action="{{ route('syaratjabatan.update', $syaratjabatan->id_syaratjabatan) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_jabatan">Kode Jabatan:</label>
                <input type="text" name="kode_jabatan" id="kode_jabatan" class="form-control" value="{{ $syaratjabatan->kode_jabatan }}" readonly>
            </div>

            <div class="form-group">
                <label for="nama_jabatan">Nama Jabatan:</label>
                <p id="nama_jabatan" class="form-control-plaintext">{{ $syaratjabatan->nama_jabatan }}</p>
            </div>

            <!-- Bagian input lainnya -->
            <div class="form-group">
                <label for="pengetahuan_kerja">Pengetahuan Kerja:</label>
                <input type="text" name="pengetahuan_kerja" id="pengetahuan_kerja" class="form-control" value="{{ $syaratjabatan->pengetahuan_kerja }}" required>
            </div>

            <div class="form-group">
                <label for="keterampilan_kerja">Keterampilan Kerja:</label>
                <input type="text" name="keterampilan_kerja" id="keterampilan_kerja" class="form-control" value="{{ $syaratjabatan->keterampilan_kerja }}" required>
            </div>

            <div class="form-group">
                <label for="pengalaman_kerja">Pengalaman Kerja:</label>
                <input type="text" name="pengalaman_kerja" id="pengalaman_kerja" class="form-control" value="{{ $syaratjabatan->pengalaman_kerja }}" required>
            </div>

            <div class="form-group">
                <label for="bakat_kerja">Bakat Kerja:</label>
                <input type="text" name="bakat_kerja" id="bakat_kerja" class="form-control" value="{{ $syaratjabatan->bakat_kerja }}" required>
            </div>

            <div class="form-group">
                <label for="tempramen_kerja">Tempramen Kerja:</label>
                <input type="text" name="tempramen_kerja" id="tempramen_kerja" class="form-control" value="{{ $syaratjabatan->tempramen_kerja }}" required>
            </div>

            <div class="form-group">
                <label for="minat_kerja">Minat Kerja:</label>
                <input type="text" name="minat_kerja" id="minat_kerja" class="form-control" value="{{ $syaratjabatan->minat_kerja }}" required>
            </div>

            <div class="form-group">
                <label for="upaya_fisik">Upaya Fisik:</label>
                <input type="text" name="upaya_fisik" id="upaya_fisik" class="form-control" value="{{ $syaratjabatan->upaya_fisik }}" required>
            </div>

            <div class="form-group">
                <label for="hubunganjabatan_dengandata">Hubungan Jabatan dengan Data:</label>
                <input type="text" name="hubunganjabatan_dengandata" id="hubunganjabatan_dengandata" class="form-control" value="{{ $syaratjabatan->hubunganjabatan_dengandata }}" required>
            </div>

            <div class="form-group">
                <label for="hubunganjabatan_denganorang">Hubungan Jabatan dengan Orang:</label>
                <input type="text" name="hubunganjabatan_denganorang" id="hubunganjabatan_denganorang" class="form-control" value="{{ $syaratjabatan->hubunganjabatan_denganorang }}" required>
            </div>

            <div class="form-group">
                <label for="hubunganjabatan_denganbenda">Hubungan Jabatan dengan Benda:</label>
                <input type="text" name="hubunganjabatan_denganbenda" id="hubunganjabatan_denganbenda" class="form-control" value="{{ $syaratjabatan->hubunganjabatan_denganbenda }}" required>
            </div>

            <div class="form-group">
                <label for="jenjang_minimal">Jenjang Minimal:</label>
                <select name="jenjang_minimal" id="jenjang_minimal" class="form-control" required>
                    <option value="SMA" {{ $syaratjabatan->jenjang_minimal == 'SMA' ? 'selected' : '' }}>SMA</option>
                    <option value="SMK" {{ $syaratjabatan->jenjang_minimal == 'SMK' ? 'selected' : '' }}>SMK</option>
                    <option value="D3" {{ $syaratjabatan->jenjang_minimal == 'D3' ? 'selected' : '' }}>D3</option>
                    <option value="D4" {{ $syaratjabatan->jenjang_minimal == 'D4' ? 'selected' : '' }}>D4</option>
                    <option value="S1" {{ $syaratjabatan->jenjang_minimal == 'S1' ? 'selected' : '' }}>S1</option>
                    <option value="S2" {{ $syaratjabatan->jenjang_minimal == 'S2' ? 'selected' : '' }}>S2</option>
                    <option value="S3" {{ $syaratjabatan->jenjang_minimal == 'S3' ? 'selected' : '' }}>S3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $syaratjabatan->jurusan }}" required>
            </div>

            <div class="form-group">
                <label for="pelatihan_fungsional">Pelatihan Fungsional:</label>
                <input type="text" name="pelatihan_fungsional" id="pelatihan_fungsional" class="form-control" value="{{ $syaratjabatan->pelatihan_fungsional }}">
            </div>

            <div class="form-group">
                <label for="pelatihan_teknik">Pelatihan Teknik:</label>
                <input type="text" name="pelatihan_teknik" id="pelatihan_teknik" class="form-control" value="{{ $syaratjabatan->pelatihan_teknik }}">
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="laki-laki" {{ $syaratjabatan->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ $syaratjabatan->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                    <option value="keduanya" {{ $syaratjabatan->jenis_kelamin == 'keduanya' ? 'selected' : '' }}>Keduanya</option>
                </select>
            </div>

            <div class="form-group">
                <label for="umur_pertahun">Umur per Tahun:</label>
                <input type="number" name="umur_pertahun" id="umur_pertahun" class="form-control" value="{{ $syaratjabatan->umur_pertahun }}" required>
            </div>

            <div class="form-group">
                <label for="tinggibadan_percm">Tinggi Badan (cm):</label>
                <input type="number" name="tinggibadan_percm" id="tinggibadan_percm" class="form-control" value="{{ $syaratjabatan->tinggibadan_percm }}" required>
            </div>

            <div class="form-group">
                <label for="beratbadan_perkg">Berat Badan (kg):</label>
                <input type="number" name="beratbadan_perkg" id="beratbadan_perkg" class="form-control" value="{{ $syaratjabatan->beratbadan_perkg }}" required>
            </div>

            <div class="form-group">
                <label for="posturbadan">Postur Badan:</label>
                <input type="text" name="posturbadan" id="posturbadan" class="form-control" value="{{ $syaratjabatan->posturbadan }}" required>
            </div>

            <div class="form-group">
                <label for="penampilan">Penampilan:</label>
                <input type="text" name="penampilan" id="penampilan" class="form-control" value="{{ $syaratjabatan->penampilan }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        document.getElementById('id_jabatan').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var kode = selectedOption.getAttribute('data-kode');
            var nama = selectedOption.getAttribute('data-nama');

            console.log('Selected Kode:', kode); // Debugging
            console.log('Selected Nama:', nama); // Debugging

            document.getElementById('kode_jabatan').value = kode;
            document.getElementById('nama_jabatan').textContent = nama;
        });

        // Initialize the fields based on the currently selected option
        document.addEventListener('DOMContentLoaded', function() {
            var selectedOption = document.getElementById('id_jabatan').options[document.getElementById('id_jabatan').selectedIndex];
            var kode = selectedOption.getAttribute('data-kode');
            var nama = selectedOption.getAttribute('data-nama');

            console.log('Initial Kode:', kode); // Debugging
            console.log('Initial Nama:', nama); // Debugging

            document.getElementById('kode_jabatan').value = kode;
            document.getElementById('nama_jabatan').textContent = nama;
        });
    </script>
</body>
</html>
