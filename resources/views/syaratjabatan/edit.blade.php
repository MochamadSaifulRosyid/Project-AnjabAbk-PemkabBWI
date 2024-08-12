<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Form untuk mengedit syarat jabatan.">
    <meta name="author" content="Your Name">
    <title>Edit Syarat Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            margin-bottom: 20px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .form-header h1 {
            font-size: 1.5rem;
            color: #007bff;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-label {
            font-weight: 600;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .text-danger {
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h1>Edit Syarat Jabatan</h1>
            </div>
            <form action="{{ route('syaratjabatan.update', $syaratjabatan->id_syaratjabatan) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kode_jabatan" class="form-label">Kode Jabatan:</label>
                    <input type="text" name="kode_jabatan" id="kode_jabatan" class="form-control" value="{{ old('kode_jabatan', $syaratjabatan->kode_jabatan) }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan:</label>
                    <p id="nama_jabatan" class="form-control-plaintext">{{ old('nama_jabatan', $syaratjabatan->nama_jabatan) }}</p>
                </div>

                <div class="mb-3">
                    <label for="pengetahuan_kerja" class="form-label">Pengetahuan Kerja:</label>
                    <input type="text" name="pengetahuan_kerja" id="pengetahuan_kerja" class="form-control" value="{{ old('pengetahuan_kerja', $syaratjabatan->pengetahuan_kerja) }}" required>
                </div>

                <div class="mb-3">
                    <label for="keterampilan_kerja" class="form-label">Keterampilan Kerja:</label>
                    <input type="text" name="keterampilan_kerja" id="keterampilan_kerja" class="form-control" value="{{ old('keterampilan_kerja', $syaratjabatan->keterampilan_kerja) }}" required>
                </div>

                <div class="mb-3">
                    <label for="pengalaman_kerja" class="form-label">Pengalaman Kerja:</label>
                    <input type="text" name="pengalaman_kerja" id="pengalaman_kerja" class="form-control" value="{{ old('pengalaman_kerja', $syaratjabatan->pengalaman_kerja) }}" required>
                </div>

                <div class="mb-3">
                    <label for="bakat_kerja" class="form-label">Bakat Kerja:</label>
                    <input type="text" name="bakat_kerja" id="bakat_kerja" class="form-control" value="{{ old('bakat_kerja', json_encode($syaratjabatan->bakat_kerja)) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tempramen_kerja" class="form-label">Tempramen Kerja:</label>
                    <input type="text" name="tempramen_kerja" id="tempramen_kerja" class="form-control" value="{{ old('tempramen_kerja', json_encode($syaratjabatan->tempramen_kerja)) }}" required>
                </div>

                <div class="mb-3">
                    <label for="minat_kerja" class="form-label">Minat Kerja:</label>
                    <input type="text" name="minat_kerja" id="minat_kerja" class="form-control" value="{{ old('minat_kerja', json_encode($syaratjabatan->minat_kerja)) }}" required>
                </div>

                <div class="mb-3">
                    <label for="upaya_fisik" class="form-label">Upaya Fisik:</label>
                    <input type="text" name="upaya_fisik" id="upaya_fisik" class="form-control" value="{{ old('upaya_fisik', json_encode($syaratjabatan->upaya_fisik)) }}" required>
                </div>

                <div class="mb-3">
                    <label for="hubunganjabatan_dengandata" class="form-label">Hubungan Jabatan dengan Data:</label>
                    <input type="text" name="hubunganjabatan_dengandata" id="hubunganjabatan_dengandata" class="form-control" value="{{ old('hubunganjabatan_dengandata', json_encode($syaratjabatan->hubunganjabatan_dengandata)) }}" required>
                </div>

                <div class="mb-3">
                    <label for="hubunganjabatan_denganorang" class="form-label">Hubungan Jabatan dengan Orang:</label>
                    <input type="text" name="hubunganjabatan_denganorang" id="hubunganjabatan_denganorang" class="form-control" value="{{ old('hubunganjabatan_denganorang', json_encode($syaratjabatan->hubunganjabatan_denganorang)) }}" required>
                </div>

                <div class="mb-3">
                    <label for="hubunganjabatan_denganbenda" class="form-label">Hubungan Jabatan dengan Benda:</label>
                    <input type="text" name="hubunganjabatan_denganbenda" id="hubunganjabatan_denganbenda" class="form-control" value="{{ old('hubunganjabatan_denganbenda', json_encode($syaratjabatan->hubunganjabatan_denganbenda)) }}" required>
                </div>

                <div class="mb-3">
                    <label for="jenjang_minimal" class="form-label">Jenjang Minimal:</label>
                    <select name="jenjang_minimal" id="jenjang_minimal" class="form-select" required>
                        <option value="SMA" {{ old('jenjang_minimal', $syaratjabatan->jenjang_minimal) == 'SMA' ? 'selected' : '' }}>SMA</option>
                        <option value="SMK" {{ old('jenjang_minimal', $syaratjabatan->jenjang_minimal) == 'SMK' ? 'selected' : '' }}>SMK</option>
                        <option value="D3" {{ old('jenjang_minimal', $syaratjabatan->jenjang_minimal) == 'D3' ? 'selected' : '' }}>D3</option>
                        <option value="D4" {{ old('jenjang_minimal', $syaratjabatan->jenjang_minimal) == 'D4' ? 'selected' : '' }}>D4</option>
                        <option value="S1" {{ old('jenjang_minimal', $syaratjabatan->jenjang_minimal) == 'S1' ? 'selected' : '' }}>S1</option>
                        <option value="S2" {{ old('jenjang_minimal', $syaratjabatan->jenjang_minimal) == 'S2' ? 'selected' : '' }}>S2</option>
                        <option value="S3" {{ old('jenjang_minimal', $syaratjabatan->jenjang_minimal) == 'S3' ? 'selected' : '' }}>S3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan:</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ old('jurusan', $syaratjabatan->jurusan) }}" required>
                </div>

                <div class="mb-3">
                    <label for="pelatihan_fungsional" class="form-label">Pelatihan Fungsional:</label>
                    <input type="text" name="pelatihan_fungsional" id="pelatihan_fungsional" class="form-control" value="{{ old('pelatihan_fungsional', $syaratjabatan->pelatihan_fungsional) }}">
                </div>

                <div class="mb-3">
                    <label for="pelatihan_teknik" class="form-label">Pelatihan Teknik:</label>
                    <input type="text" name="pelatihan_teknik" id="pelatihan_teknik" class="form-control" value="{{ old('pelatihan_teknik', $syaratjabatan->pelatihan_teknik) }}">
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                        <option value="laki-laki" {{ old('jenis_kelamin', $syaratjabatan->jenis_kelamin) == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="perempuan" {{ old('jenis_kelamin', $syaratjabatan->jenis_kelamin) == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                        <option value="keduanya" {{ old('jenis_kelamin', $syaratjabatan->jenis_kelamin) == 'keduanya' ? 'selected' : '' }}>Keduanya</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="umur_pertahun" class="form-label">Umur per Tahun:</label>
                    <input type="number" name="umur_pertahun" id="umur_pertahun" class="form-control" value="{{ old('umur_pertahun', $syaratjabatan->umur_pertahun) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tinggibadan_percm" class="form-label">Tinggi Badan (cm):</label>
                    <input type="number" name="tinggibadan_percm" id="tinggibadan_percm" class="form-control" value="{{ old('tinggibadan_percm', $syaratjabatan->tinggibadan_percm) }}" required>
                </div>

                <div class="mb-3">
                    <label for="beratbadan_perkg" class="form-label">Berat Badan (kg):</label>
                    <input type="number" name="beratbadan_perkg" id="beratbadan_perkg" class="form-control" value="{{ old('beratbadan_perkg', $syaratjabatan->beratbadan_perkg) }}" required>
                </div>

                <div class="mb-3">
                    <label for="posturbadan" class="form-label">Postur Badan:</label>
                    <input type="text" name="posturbadan" id="posturbadan" class="form-control" value="{{ old('posturbadan', $syaratjabatan->posturbadan) }}" required>
                </div>

                <div class="mb-3">
                    <label for="penampilan" class="form-label">Penampilan:</label>
                    <input type="text" name="penampilan" id="penampilan" class="form-control" value="{{ old('penampilan', $syaratjabatan->penampilan) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('syaratjabatan.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var jabatanSelect = document.getElementById('id_jabatan');
            jabatanSelect.addEventListener('change', function() {
                var selectedOption = this.options[this.selectedIndex];
                document.getElementById('kode_jabatan').value = selectedOption.getAttribute('data-kode');
                document.getElementById('nama_jabatan').textContent = selectedOption.getAttribute('data-nama');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-3B6t4A0de5XbOuF3k4FAJ6jbQ0LYOY26dyP1cYy0yKNO8k5aM5d0dczPv2Gd5qYY" crossorigin="anonymous"></script>
</body>
</html>
