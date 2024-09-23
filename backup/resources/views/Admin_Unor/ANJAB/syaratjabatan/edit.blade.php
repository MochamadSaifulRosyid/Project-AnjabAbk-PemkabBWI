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
            @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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

                <div class="form-group">
                    <label for="bakat_kerja" class="form-label">Bakat Kerja:</label>
                    <div>
                        @php
                            // Daftar opsi bakat kerja
                            $bakatKerjaOptions = [
                                'Inteligensia' => 'Kemampuan belajar secara umum.',
                                'Bakat verbal' => 'Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.',
                                'Numerik' => 'Kemampuan untuk melakukan operasi arithmatik secara tepat dan efektif.',
                                'Pandang Ruang' => 'Kemampuan berpikir secara visual mengenai bentuk-bentuk geometris, untuk memahami gambar-gambar dari benda-benda tiga dimensi.',
                                'Penerapan Bentuk' => 'Kemampuan menyerap perincian-perincian yang berkaitan dalam objek atau dalam gambar atau dalam baham grafik.',
                                'Ketelitian' => 'Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.',
                                'Koordinasi Motor' => 'Kemampuan untuk mengkoordinir mata dan tangan secara cepat dan cermat dalam membuat gerakan yang cepat.',
                                'Kecekatan Jari' => 'Kemampuan menggerakkan jari-jemari dengan mudah dan perlu keterampilan.',
                                'Koordinasi Mata, Tangan, dan Kaki' => 'Kemampuan menggerakkan tangan dan kaki secara koordinatif satu sama lain sesuai dengan rangsangan penglihatan.',
                                'Membedakan Warna' => 'Kemampuan memadukan atau membedakan berbagai warna yang asli, yang gemerlapan.',
                                'Kecekatan tangan' => 'Kemampuan menggerakan tangan dengan mudah dan penuh keterampilan.'
                            ];
                        @endphp
                        @foreach($bakatKerjaOptions as $key => $description)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="{{ $key }}" id="bakat_kerja_{{ $loop->index }}"
                                    {{ in_array($key, json_decode($syaratjabatan->bakat_kerja, true) ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label" for="bakat_kerja_{{ $loop->index }}">
                                    <b>{{ $key }}</b> : {{ $description }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="tempramen_kerja" class="form-label">Tempramen Kerja:</label>
                    <div>
                        @php
                            // Daftar opsi tempramen kerja
                            $tempramenKerjaOptions = [
                                'Kemampuan menyesuaikan diri menerima tanggung jawab untuk kegiatan memimpin, mengendalikan atau merencanakan.' => 'D',
                                'Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandang pribadi.' => 'F',
                                'Kemampuan menyesuaikan diri untuk pekerjaan-pekerjaan mempengaruhi orang lain dalam pendapat, sikap atau pertimbangan mengenai gagasan.' => 'I',
                                'Kemampuan menyesuaikan diri pada kegiatan perbuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria ransangan indera atau atas dasar pertimbangan pribadi.' => 'J',
                                'Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.' => 'M',
                                'Kemampuan menyesuaikan diri dalam berhubungan dengan orang lain lebih dari hanya penerimaan dan pembuatan intruksi.' => 'P',
                                'Kemampuan menyesuaikan diri dalam kegiatan-kegiatan yang berulang, atau secara terus menerus melakukan kegiatan yang sama, sesuai dengan prangkat prosedur, urutan atau kecepatan yang tertentu.' => 'R',
                                'Kemampuan menyesuaikan diri untuk bekerja dengan ketegangan jiwa jika berhadapan dengan keadaan darurat, kritis, tidak biasa atau bahaya, atau bekerja dengan kecepatan kerja dan perhatian terus menerus merupakan keseluruhan atau sebagian aspek pekerjaan.' => 'S',
                                'Kemampuan menyesuaikan diri dengan situasi yang menghendaki pencapaian dengan tepat menurut perangkat batas, toleransi atau standar-standar tertentu.' => 'T',
                                'Kemampuan menyesuaikan diri untuk melaksanakan berbagai tugas, sering berganti dari tugas yang satu ke tugas yang lainnya yang berbeda sifatnya, tanpa kehilangan efisiensi atau ketenangan diri.' => 'V'
                            ];
                        @endphp
                        @foreach($tempramenKerjaOptions as $description => $label)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="{{ $description }}" id="tempramen_kerja_{{ $loop->index }}"
                                    {{ in_array($description, json_decode($syaratjabatan->tempramen_kerja, true) ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label" for="tempramen_kerja_{{ $loop->index }}">
                                    {{ $label }} : {{ $description }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="minat_kerja" class="form-label">Minat Kerja:</label>
                    <div>
                        @php
                            // Daftar opsi minat kerja
                            $minatKerjaOptions = [
                                'Realistik adalah Aktivitas yang memerlukan manipulasi eksplisit, teratur atau sistematik terhadap obyek/alat/benda/mesin' => 'R',
                                'Investigatif adalah Aktivitas yang memerlukan penyelidikan observasional, simbolik dan sistematik terhadap fenomena dan kegiatan ilmiah.' => 'I',
                                'Artistik adalah Aktivitas yang sifatnya ambigu, kreatif, bebas dan tidak sistematis dalam proses penciptaan produk/karya bernilai seni.' => 'A',
                                'Sosial adalah Aktivitas yang bersifat sosial atau memerlukan keterampilan berkomunikasi dengan orang lain.' => 'S',
                                'Kewirausahaan adalah Aktivitas yang melibatkan kegiatan pengelolaan/ manajerial untuk pencapaian tujuan organisasi.' => 'Ke',
                                'Konvensional adalah Aktivitas yang memerlukan manipulasi data yang eksplisit, kegiatan administrasi, rutin dan klerikal.' => 'K'
                            ];
                        @endphp
                        @foreach($minatKerjaOptions as $description => $label)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="minat_kerja[]" value="{{ $description }}" id="minat_kerja_{{ $loop->index }}"
                                    {{ in_array($description, json_decode($syaratjabatan->minat_kerja, true) ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label" for="minat_kerja_{{ $loop->index }}">
                                    {{ $label }} : {{ $description }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="upaya_fisik" class="form-label">Upaya Fisik:</label>
                    <div>
                        @php
                            // Daftar opsi upaya fisik
                            $upayaFisikOptions = [
                                'Berdiri' => 'Berada di suatu tempat dalam posisi tegak ditempat tanpa pindah ke tempat lain.',
                                'Berjalan' => 'Bergerak dengan jalan kaki.',
                                'Duduk' => 'Berada dalam suatu tempat dalam posisi duduk biasa.',
                                'Mengangkat' => 'Menaikkan atau menurunkan benda di satu tingkat ke tingkat lain (termasuk menarik ke atas).',
                                'Membawa' => 'Memindahkan benda, umumnya dengan menggunakan tangan, lengan atau bahu.',
                                'Mendorong' => 'Menggunakan tenaga untuk memindahkan benda menjauhi badan.',
                                'Menarik' => 'Menggunakan tenaga untuk memindahkan suatu benda ke arah badan (termasuk menyentak atau merenggut).',
                                'Memanjat' => 'Naik atau turun tangga, tiang, lorong dan lain-lain dengan menggunakan kaki, tangan, dan kaki.',
                                'Menyimpan imbangan / mengatur imbangan' => 'Agar tidak jatuh badan waktu berjalan, berdiri, membungkuk, atau berlari di atas tempat yang agak sempit, licin dan tinggi tanpa alat pegangan, atau mengatur imbangan pada waktu melakukan olah raga senam.',
                                'Menunduk' => 'Melengkungkan tubuh dengan cara melekukkan tulang punggung dan kaki.',
                                'Berlutut' => 'Melengkungkan paha kaki pada lutut dan berdiam di suatu tempat dengan tubuh diatas lutut.',
                                'Membungkuk' => 'Melengkungkan tubuh dengan cara melengkungkan tulang punggung sampai kira-kira sejajar dengan pinggang.',
                                'Merangkak' => 'Bergerak dengan menggunakan tangan dan lutut atau kaki dan tangan.',
                                'Menjangkau' => 'Mengulurkan tangan dan lengan ke jurusan tertentu.',
                                'Memegang' => 'Dengan satu atau dua tangan mengukur, menggenggam, memutar dan lain sebagainya.',
                                'Bekerja dengan jari' => 'Memungut, menjepit, menekan dan lain sebagainya dengan menggunakan jari (berbeda dengan "memegang" yang terutama menggunakan seluruh bagian tangan).',
                                'Meraba' => 'Menyentuh dengan jari atau telapak tangan untuk mengetahui sifat-sifat benda seperti, suhu, bentuk.',
                                'Berbicara' => 'Menyatakan atau bertukar pikiran secara lisan agar dapat dipahami.',
                                'Mendengar' => 'Menggunakan telinga untuk mengetahui adanya suara.',
                                'Melihat' => 'Usaha mengetahui dengan menggunakan mata.',
                                'Ketajaman jarak jauh' => 'Kejelasan penglihatan dalam jarak lebih dari 5 meter.',
                                'Pengamatan secara mendalam' => 'Penglihatan dalam 3 dimensi, untuk menetapkan hubungan antara jarak, ruang serta cara melihat benda dimana benda tersebut berada dan sebagaimana adanya.',
                                'Penyesuaian lensa mata' => 'Penyesuaian lensa mata untuk melihat suatu benda yang sangat penting bila melaksanakan pekerjaan yang perlu dengan melihat benda-benda dalam jarak dan arah yang berbeda.',
                                'Melihat berbagai warna' => 'Membedakan warna yang terdapat dalam pekerjaan.',
                                'Luas' => 'Melihat suatu daerah pandang, ke atas dan ke bawah pandang atau ke kanan atau ke kiri sedang mata tetap berada di titik tertentu.'
                            ];
                        @endphp
                        @foreach($upayaFisikOptions as $description => $details)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="{{ $description }}" id="upaya_fisik_{{ $loop->index }}"
                                    {{ in_array($description, json_decode($syaratjabatan->upaya_fisik, true) ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label" for="upaya_fisik_{{ $loop->index }}">
                                    <b>{{ $description }}</b> : {{ $details }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="hubunganjabatan_dengandata" class="form-label">Hubungan Jabatan dengan Data:</label>
                    <div>
                        @php
                            // Daftar opsi hubungan jabatan dengan data
                            $hubunganJabatanDenganDataOptions = [
                                'D0 = Memadukan data' => 'D0 = Memadukan data',
                                'D1 = Mengkoordinasikan data' => 'D1 = Mengkoordinasikan data',
                                'D2 = Menganalisis data' => 'D2 = Menganalisis data',
                                'D3 = Menyusun data' => 'D3 = Menyusun data',
                                'D4 = Menghitung data' => 'D4 = Menghitung data',
                                'D5 = Menyalin data' => 'D5 = Menyalin data',
                                'D6 = Membandingkan data' => 'D6 = Membandingkan data'
                            ];
                        @endphp
                        @foreach($hubunganJabatanDenganDataOptions as $value => $label)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_dengandata[]" value="{{ $value }}" id="hubunganjabatan_dengandata_{{ $loop->index }}"
                                    {{ in_array($value, json_decode($syaratjabatan->hubunganjabatan_dengandata, true) ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label" for="hubunganjabatan_dengandata_{{ $loop->index }}">
                                    {{ $label }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="hubunganjabatan_denganorang" class="form-label">Hubungan Jabatan dengan Orang:</label>
                    <div>
                        @php
                            // Daftar opsi hubungan jabatan dengan orang
                            $hubunganJabatanDenganOrangOptions = [
                                '00 = Menasehati' => '00 = Menasehati',
                                '01 = Berunding' => '01 = Berunding',
                                '02 = Mengajar' => '02 = Mengajar',
                                '03 = Menyelia' => '03 = Menyelia',
                                '04 = Menghibur' => '04 = Menghibur',
                                '05 = Mempengaruhi' => '05 = Mempengaruhi',
                                '06 = Berbicara - memberi tanda' => '06 = Berbicara - memberi tanda',
                                '07 = Melayani orang' => '07 = Melayani orang',
                                '08 = Menerima instruksi' => '08 = Menerima instruksi'
                            ];
                        @endphp
                        @foreach($hubunganJabatanDenganOrangOptions as $value => $label)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="{{ $value }}" id="hubunganjabatan_denganorang_{{ $loop->index }}"
                                    {{ in_array($value, json_decode($syaratjabatan->hubunganjabatan_denganorang, true) ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label" for="hubunganjabatan_denganorang_{{ $loop->index }}">
                                    {{ $label }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="form-group">
                    <label for="hubunganjabatan_denganbenda" class="form-label">Hubungan Jabatan dengan Benda:</label>
                    <div>
                        @php
                            // Daftar opsi hubungan jabatan dengan benda
                            $hubunganJabatanDenganBendaOptions = [
                                'B0 = Memasang mesin' => 'B0 = Memasang mesin',
                                'B1 = Mengerjakan persisi' => 'B1 = Mengerjakan persisi',
                                'B2 = Menjalankan - mengontrol mesin' => 'B2 = Menjalankan - mengontrol mesin',
                                'B3 = Mengemudikan I menjalankan mesin' => 'B3 = Mengemudikan I menjalankan mesin',
                                'B4 = Mengerjakan benda dengan tangan atau perkakas' => 'B4 = Mengerjakan benda dengan tangan atau perkakas',
                                'B5 = Melayani mesin' => 'B5 = Melayani mesin',
                                'B6 = Memasukkan, mengeluarkan barang ke/dari mesin' => 'B6 = Memasukkan, mengeluarkan barang ke/dari mesin',
                                'B7 = Memegang' => 'B7 = Memegang'
                            ];
                        @endphp
                        @foreach($hubunganJabatanDenganBendaOptions as $value => $label)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganbenda[]" value="{{ $value }}" id="hubunganjabatan_denganbenda_{{ $loop->index }}"
                                    {{ in_array($value, json_decode($syaratjabatan->hubunganjabatan_denganbenda, true) ?? []) ? 'checked' : '' }}>
                                <label class="form-check-label" for="hubunganjabatan_denganbenda_{{ $loop->index }}">
                                    {{ $label }}
                                </label>
                            </div>
                        @endforeach
                    </div>
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
    </div>]

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-3B6t4A0de5XbOuF3k4FAJ6jbQ0LYOY26dyP1cYy0yKNO8k5aM5d0dczPv2Gd5qYY" crossorigin="anonymous"></script>
</body>
</html>
