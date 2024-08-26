<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Form untuk menambah syarat jabatan baru.">
    <meta name="author" content="Your Name">
    <title>Tambah Syarat Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 800px;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 8px 8px 0 0;
        }
        .form-label {
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
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Tambah Syarat Jabatan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('syaratjabatan.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="id_jabatan" class="form-label">Jabatan:</label>
                        <select name="id_jabatan" id="id_jabatan" class="form-select" required>
                            <option value="" disabled selected>Pilih Jabatan</option>
                            @foreach($jabatans as $jabatan)
                                <option value="{{ $jabatan->id_jabatan }}" data-kode="{{ $jabatan->kode_jabatan }}" data-nama="{{ $jabatan->nama_jabatan }}">
                                    {{ $jabatan->nama_jabatan }} ({{ $jabatan->kode_jabatan }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="kode_jabatan" class="form-label">Kode Jabatan:</label>
                        <input type="text" name="kode_jabatan" id="kode_jabatan" class="form-control" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nama_jabatan" class="form-label">Nama Jabatan:</label>
                        <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="pengetahuan_kerja" class="form-label">Pengetahuan Kerja:</label>
                        <input type="text" name="pengetahuan_kerja" id="pengetahuan_kerja" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="keterampilan_kerja" class="form-label">Keterampilan Kerja:</label>
                        <input type="text" name="keterampilan_kerja" id="keterampilan_kerja" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="pengalaman_kerja" class="form-label">Pengalaman Kerja:</label>
                        <input type="text" name="pengalaman_kerja" id="pengalaman_kerja" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="bakat_kerja" class="form-label">Bakat Kerja:</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Inteligensia" id="bakat_kerja_a">
                                <label class="form-check-label" for="bakat_kerja_a">
                                    <b>Inteligensia</b> : Kemampuan belajar secara umum.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Bakat verbal" id="bakat_kerja_b">
                                <label class="form-check-label" for="bakat_kerja_b">
                                    <b>Bakat verbal</b> : Kemampuan untuk memahami arti kata-kata dan penggunaannya secara tepat dan efektif.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Numerik" id="bakat_kerja_c">
                                <label class="form-check-label" for="bakat_kerja_c">
                                    <b>Numerik</b> : Kemampuan untuk melakukan operasi arithmatik secara tepat dan efektif.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Pandang Ruang" id="bakat_kerja_d">
                                <label class="form-check-label" for="bakat_kerja_d">
                                    <b>Pandang Ruang</b> : Kemampuan berpikir secara visual mengenai bentuk-bentuk geometris, untuk memahami gambar-gambar dari benda-benda tiga dimensi.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Penerapan Bentuk" id="bakat_kerja_e">
                                <label class="form-check-label" for="bakat_kerja_e">
                                    <b>Penerapan Bentuk</b> : Kemempuan menyerap perincian-perincian yang berkaitan dalam objek atau dalam gambar atau dalam baham grafik.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Ketelitian" id="bakat_kerja_f">
                                <label class="form-check-label" for="bakat_kerja_f">
                                    <b>Ketelitian</b> : Kemampuan menyerap perincian yang berkaitan dalam bahan verbal atau dalam tabel.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Koordinasi Motor" id="bakat_kerja_g">
                                <label class="form-check-label" for="bakat_kerja_g">
                                    <b>Koordinasi Motor</b> : Kemampuan untuk mengkoordinir mata dan tangan secara cepat dan cermat dalam membuat gerakan yang cepat.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Kecekatan Jari" id="bakat_kerja_h">
                                <label class="form-check-label" for="bakat_kerja_h">
                                    <b>Kecekatan Jari</b> : Kemampuan menggerakkan jari-jemari dengan mudah dan perlu keterampilan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Koordinasi Mata, Tangan, dan Kaki" id="bakat_kerja_i">
                                <label class="form-check-label" for="bakat_kerja_i">
                                    <b>Koordinasi Mata, Tangan, dan Kaki</b> : Kemampuan menggerakkan tangan dan kaki secara koordinatif satu sama lain sesuai dengan rangsangan penglihatan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Membedakan Warna" id="bakat_kerja_j">
                                <label class="form-check-label" for="bakat_kerja_j">
                                    <b>Membedakan Warna</b> : Kemampuan memadukan atau membedakan berbagai warna yang asli, yang gemerlapan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bakat_kerja[]" value="Kecekatan tangan" id="bakat_kerja_k">
                                <label class="form-check-label" for="bakat_kerja_k">
                                    <b>Kecekatan tangan</b> : Kemampuan menggerakan tangan dengan mudah dan penuh keterampilan.
                                </label>
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label for="tempramen_kerja" class="form-label">Tempramen Kerja:</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri menerima tanggung jawab untuk kegiatan memimpin, mengendalikan atau merencanakan." id="tempramen_kerja_a">
                                <label class="form-check-label" for="tempramen_kerja_a">
                                    D : Kemampuan menyesuaikan diri menerima tanggung jawab untuk kegiatan memimpin, mengendalikan atau merencanakan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandang pribadi." id="tempramen_kerja_b">
                                <label class="form-check-label" for="tempramen_kerja_b">
                                    F : Kemampuan menyesuaikan diri dengan kegiatan yang mengandung penafsiran perasaan, gagasan atau fakta dari sudut pandang pribadi.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri untuk pekerjaan-pekerjaan mempengaruhi orang lain dalam pendapat, sikap atau pertimbangan mengenai gagasan." id="tempramen_kerja_c">
                                <label class="form-check-label" for="tempramen_kerja_c">
                                    I : Kemampuan menyesuaikan diri untuk pekerjaan-pekerjaan mempengaruhi orang lain dalam pendapat, sikap atau pertimbangan mengenai gagasan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri pada kegiatan perbuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria ransangan indera atau atas dasar pertimbangan pribadi." id="tempramen_kerja_d">
                                <label class="form-check-label" for="tempramen_kerja_d">
                                    J : Kemampuan menyesuaikan diri pada kegiatan perbuatan kesimpulan penilaian atau pembuatan peraturan berdasarkan kriteria ransangan indera atau atas dasar pertimbangan pribadi.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji." id="tempramen_kerja_e">
                                <label class="form-check-label" for="tempramen_kerja_e">
                                    M : Kemampuan menyesuaikan diri dengan kegiatan pengambilan peraturan, pembuatan pertimbangan, atau pembuatan peraturan berdasarkan kriteria yang diukur atau yang dapat diuji.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri dalam berhubungan dengan orang lain lebih dari hanya penerimaan dan pembuatan intruksi." id="tempramen_kerja_f">
                                <label class="form-check-label" for="tempramen_kerja_f">
                                    P : Kemampuan menyesuaikan diri dalam berhubungan dengan orang lain lebih dari hanya penerimaan dan pembuatan intruksi.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri dalam kegiatan-kegiatan yang berulang, atau secara terus menerus melakukan kegiatan yang sama, sesuai dengan prangkat prosedur, urutan atau kecepatan yang tertentu." id="tempramen_kerja_g">
                                <label class="form-check-label" for="tempramen_kerja_g">
                                    R : Kemampuan menyesuaikan diri dalam kegiatan-kegiatan yang berulang, atau secara terus menerus melakukan kegiatan yang sama, sesuai dengan prangkat prosedur, urutan atau kecepatan yang tertentu.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri untuk bekerja dengan ketegangan jiwa jika berhadapan dengan keadaan darurat, kritis, tidak biasa atau bahaya, atau bekerja dengan kecepatan kerja dan perhatian terus menerus merupakan keseluruhan atau sebagian aspek pekerjaan." id="tempramen_kerja_h">
                                <label class="form-check-label" for="tempramen_kerja_h">
                                    S : Kemampuan menyesuaikan diri untuk bekerja dengan ketegangan jiwa jika berhadapan dengan keadaan darurat, kritis, tidak biasa atau bahaya, atau bekerja dengan kecepatan kerja dan perhatian terus menerus merupakan keseluruhan atau sebagian aspek pekerjaan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri dengan situasi yang menghendaki pencapaian dengan tepat menurut perangkat batas, toleransi atau standar-standar tertentu." id="tempramen_kerja_i">
                                <label class="form-check-label" for="tempramen_kerja_i">
                                    T : Kemampuan menyesuaikan diri dengan situasi yang menghendaki pencapaian dengan tepat menurut perangkat batas, toleransi atau standar-standar tertentu.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tempramen_kerja[]" value="Kemampuan menyesuaikan diri untuk melaksanakan berbagai tugas, sering berganti dari tugas yang satu ke tugas yang lainnya yang berbeda sifatnya, tanpa kehilangan efisiensi atau ketenangan diri." id="tempramen_kerja_j">
                                <label class="form-check-label" for="tempramen_kerja_j">
                                    V : Kemampuan menyesuaikan diri untuk melaksanakan berbagai tugas, sering berganti dari tugas yang satu ke tugas yang lainnya yang berbeda sifatnya, tanpa kehilangan efisiensi atau ketenangan diri.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="minat_kerja" class="form-label">Minat Kerja:</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="minat_kerja[]" value="Realistik adalah Aktivitas yang memerlukan manipulasi eksplisit, teratur atau sistematik terhadap obyek/alat/benda/mesin" id="minat_kerja_a">
                                <label class="form-check-label" for="minat_kerja_a">
                                    R : Realistik adalah Aktivitas yang memerlukan manipulasi eksplisit, teratur atau sistematik terhadap obyek/alat/benda/mesin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="minat_kerja[]" value="Investigatif adalah Aktivitas yang memerlukan penyelidikan observasional, simbolik dan sistematik terhadap fenomena dan kegiatan ilmiah." id="minat_kerja_b">
                                <label class="form-check-label" for="minat_kerja_b">
                                    I : Investigatif adalah Aktivitas yang memerlukan penyelidikan observasional, simbolik dan sistematik terhadap fenomena dan kegiatan ilmiah.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="minat_kerja[]" value="Artistik adalah Aktivitas yang sifatnya ambigu, kreatif, bebas dan tidak sistematis dalam proses penciptaan produk/karya bernilai seni." id="minat_kerja_c">
                                <label class="form-check-label" for="minat_kerja_c">
                                    A : Artistik adalah Aktivitas yang sifatnya ambigu, kreatif, bebas dan tidak sistematis dalam proses penciptaan produk/karya bernilai seni.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="minat_kerja[]" value="Sosial adalah Aktivitas yang bersifat sosial atau memerlukan keterampilan berkomunikasi dengan orang lain." id="minat_kerja_d">
                                <label class="form-check-label" for="minat_kerja_d">
                                    S : Sosial adalah Aktivitas yang bersifat sosial atau memerlukan keterampilan berkomunikasi dengan orang lain.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="minat_kerja[]" value="Kewirausahaan adalah Aktivitas yang melibatkan kegiatan pengelolaan/ manajerial untuk pencapaian tujuan organisasi." id="minat_kerja_e">
                                <label class="form-check-label" for="minat_kerja_e">
                                    Ke : Kewirausahaan adalah Aktivitas yang melibatkan kegiatan pengelolaan/ manajerial untuk pencapaian tujuan organisasi.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="minat_kerja[]" value="Konvensional adalah Aktivitas yang memerlukan manipulasi data yang eksplisit, kegiatan administrasi, rutin dan klerikal." id="minat_kerja_f">
                                <label class="form-check-label" for="minat_kerja_f">
                                    K : Konvensional adalah Aktivitas yang memerlukan manipulasi data yang eksplisit, kegiatan administrasi, rutin dan klerikal.
                                </label>
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label for="upaya_fisik" class="form-label">Upaya Fisik:</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Berdiri" id="upaya_fisik_a">
                                <label class="form-check-label" for="upaya_fisik_a">
                                    <b>Berdiri</b> : Berada di suatu tempat dalam posisi tegak ditempat tanpa pindah ke tempat lain.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Berjalan" id="upaya_fisik_b">
                                <label class="form-check-label" for="upaya_fisik_b">
                                    <b>Berjalan</b> : Bergerak dengan jalan kaki.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Duduk" id="upaya_fisik_c">
                                <label class="form-check-label" for="upaya_fisik_c">
                                    <b>Duduk</b> : Berada dalam suatu tempat dalam posisi duduk biasa.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Mengangkat" id="upaya_fisik_d">
                                <label class="form-check-label" for="upaya_fisik_d">
                                    <b>Mengangkat</b> : Menaikkan atau menurunkan benda di satu tingkat ke tingkat lain (termasuk menarik ke atas).
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Membawa" id="upaya_fisik_e">
                                <label class="form-check-label" for="upaya_fisik_e">
                                    <b>Membawa</b> : Memindahkan benda, umumnya dengan menggunakan tangan, lengan atau bahu.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Mendorong" id="upaya_fisik_f">
                                <label class="form-check-label" for="upaya_fisik_f">
                                    <b>Mendorong</b> : Menggunakan tenaga untuk memindahkan benda menjauhi badan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Menarik" id="upaya_fisik_g">
                                <label class="form-check-label" for="upaya_fisik_g">
                                    <b>Menarik</b> : Menggunakan tenaga untuk memindahkan suatu benda ke arah badan (termasuk menyentak atau merenggut).
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Memanjat" id="upaya_fisik_h">
                                <label class="form-check-label" for="upaya_fisik_h">
                                    <b>Memanjat</b> : Naik atau turun tangga, tiang, lorong dan lain-lain dengan menggunakan kaki, tangan, dan kaki.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Menyimpan imbangan / mengatur imbangan" id="upaya_fisik_i">
                                <label class="form-check-label" for="upaya_fisik_i">
                                    <b>Menyimpan imbangan / mengatur imbangan</b> : Agar tidak jatuh badan waktu berjalan, berdiri, membungkuk, atau erlari di atas tempat yang agak sempit, licin dan tinggi tanpa alat pegangan, atau mengatur imbangan pada waktu melakukan olah raga senam.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Menunduk" id="upaya_fisik_j">
                                <label class="form-check-label" for="upaya_fisik_j">
                                    <b>Menunduk</b> : Melengkungkan tubuh dengan cara melekukkan tulang punggung dan kaki.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Berlutut" id="upaya_fisik_k">
                                <label class="form-check-label" for="upaya_fisik_k">
                                    <b>Berlutut</b> : Melengkungkan paha kaki pada lutut dan berdiam di suatu tempat dengan tubuh diatas lutut.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Membungkuk" id="upaya_fisik_l">
                                <label class="form-check-label" for="upaya_fisik_l">
                                    <b>Membungkuk</b> : Melengkungkan tubuh dengan cara melengkungkan tulang punggung sampai kira-kira sejajar dengan pinggang.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Merangkak" id="upaya_fisik_m">
                                <label class="form-check-label" for="upaya_fisik_m">
                                    <b>Merangkak</b>  : Bergerak dengan menggunakan tangan dan lutut atau kaki dan tangan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Menjangkau" id="upaya_fisik_n">
                                <label class="form-check-label" for="upaya_fisik_n">
                                    <b>Menjangkau</b>  : Mengulurkan tangan dan lengan ke jurusan tertentu.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Memegang" id="upaya_fisik_o">
                                <label class="form-check-label" for="upaya_fisik_o">
                                    <b>Memegang</b>  : Dengan satu atau dua tangan mengukur, menggenggam, memutar dan lain sebagainya.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Bekerja dengan jari" id="upaya_fisik_p">
                                <label class="form-check-label" for="upaya_fisik_p">
                                    <b>Bekerja dengan jari</b> : Memungut, menjepit, menekan dan lain sebagainya dengan menggunakan jari (berbeda dengan "memegang" yang terutama menggunakan seluruh bagian tangan).
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Meraba" id="upaya_fisik_q">
                                <label class="form-check-label" for="upaya_fisik_q">
                                    <b>Meraba</b> : Menyentuh dengan jari atau telapak tangan untuk mengetahui sifat-sifat benda seperti, suhu, bentuk.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Berbicara" id="upaya_fisik_r">
                                <label class="form-check-label" for="upaya_fisik_r">
                                    <b>Berbicara</b> : Menyatakan atau bertukan pikiran secara lisan agar dapat dipahami.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Mendengar" id="upaya_fisik_s">
                                <label class="form-check-label" for="upaya_fisik_s">
                                    <b>Mendengar</b> : Menggunakan telinga untuk mengetahui adanya suara.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Melihat" id="upaya_fisik_t">
                                <label class="form-check-label" for="upaya_fisik_t">
                                    <b>Melihat</b> : Usaha mengetahui dengan menggunakan mata.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Ketajaman jarak jauh" id="upaya_fisik_u">
                                <label class="form-check-label" for="upaya_fisik_u">
                                    <b>Ketajaman jarak jauh</b> : Kejelasan penglihatan dalam jarak lebih dari 5 meter.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Pengamatan secara mendalam" id="upaya_fisik_v">
                                <label class="form-check-label" for="upaya_fisik_v">
                                    <b>Pengamatan secara mendalam</b> : Penglihatan dalam 3 dimensi, untuk menetapkan hubungan antara jarak, ruang serta cara melihat benda dimana benda tersebut berada dan sebagaimana adanya.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Penyesuaian lensa mata" id="upaya_fisik_w">
                                <label class="form-check-label" for="upaya_fisik_w">
                                    <b>Penyesuaian lensa mata</b> : Penyesuaian lensa mata untuk melihat suatu benda yang sangat penting bila melaksanakan pekerjaan yang perlu dengan melihat benda-benda dalam jarak dan arah yang berbeda.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Melihat berbagai warna" id="upaya_fisik_x">
                                <label class="form-check-label" for="upaya_fisik_x">
                                    <b>Melihat berbagai warna</b> : Membedakan warna yang terdapat dalam pekerjaan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="upaya_fisik[]" value="Luas" id="upaya_fisik_y">
                                <label class="form-check-label" for="upaya_fisik_y">
                                    <b>Luas</b> : melihat suatu daerah pandang, ke atas dan ke bawah pandang atau ke kanan atau ke kiri sedang mata tetap berada di titik tertentu.
                                </label>
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label for="hubunganjabatan_dengandata" class="form-label">Hubungan Jabatan dengan Data:</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_dengandata[]" value="D0 = Memadukan data" id="hubunganjabatan_dengandata_a">
                                <label class="form-check-label" for="hubunganjabatan_dengandata_a">
                                    D0 = Memadukan data
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_dengandata[]" value="D1 = Mengkoordinasikan data" id="hubunganjabatan_dengandata_b">
                                <label class="form-check-label" for="hubunganjabatan_dengandata_b">
                                    D1 = Mengkoordinasikan data
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_dengandata[]" value="D2 = Menganalisis data" id="hubunganjabatan_dengandata_c">
                                <label class="form-check-label" for="hubunganjabatan_dengandata_c">
                                    D2 = Menganalisis data
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_dengandata[]" value="D3 = Menyusun data" id="hubunganjabatan_dengandata_d">
                                <label class="form-check-label" for="hubunganjabatan_dengandata_d">
                                    D3 = Menyusun data
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_dengandata[]" value="D4 = Menghitung data" id="hubunganjabatan_dengandata_e">
                                <label class="form-check-label" for="hubunganjabatan_dengandata_e">
                                    D4 = Menghitung data
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_dengandata[]" value="D5 = Menyalin data" id="hubunganjabatan_dengandata_f">
                                <label class="form-check-label" for="hubunganjabatan_dengandata_f">
                                    D5 = Menyalin data
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_dengandata[]" value="D6 = Membandingkan data" id="hubunganjabatan_dengandata_g">
                                <label class="form-check-label" for="hubunganjabatan_dengandata_g">
                                    D6 = Membandingkan data
                                </label>
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label for="hubunganjabatan_denganorang" class="form-label">Hubungan Jabatan dengan Orang:</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="00 = Menasehati" id="hubunganjabatan_denganorang_a">
                                <label class="form-check-label" for="hubunganjabatan_denganorang_a">
                                    00 = Menasehati
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="01 = Berunding" id="hubunganjabatan_denganorang_b">
                                <label class="form-check-label" for="hubunganjabatan_denganorang_b">
                                    01 = Berunding
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="02 = Mengajar" id="hubunganjabatan_denganorang_c">
                                <label class="form-check-label" for="hubunganjabatan_denganorang_c">
                                    02 = Mengajar
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="03 = Menyelia" id="hubunganjabatan_denganorang_d">
                                <label class="form-check-label" for="hubunganjabatan_denganorang_d">
                                    03 = Menyelia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="04 = Menghibur" id="hubunganjabatan_denganorang_e">
                                <label class="form-check-label" for="hubunganjabatan_denganorang_e">
                                    04 = Menghibur
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="05 = Mempengaruhi" id="hubunganjabatan_denganorang_f">
                                <label class="form-check-label" for="hubunganjabatan_denganorang_f">
                                    05 = Mempengaruhi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="06 = Berbicara - memberi tanda" id="hubunganjabatan_denganorang_g">
                                <label class="form-check-label" for="hubunganjabatan_denganorang_g">
                                    06 = Berbicara - memberi tanda
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="07 = Melayani orang" id="hubunganjabatan_denganorang_h">
                                <label class="form-check-label" for="hubunganjabatan_denganorang_h">
                                    07 = Melayani orang
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganorang[]" value="08 = Menerima instruksi" id="hubunganjabatan_denganorang_i">
                                <label class="form-check-label" for="hubunganjabatan_denganorang_i">
                                    08 = Menerima instruksi
                                </label>
                            </div>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label for="hubunganjabatan_denganbenda" class="form-label">Hubungan Jabatan dengan Benda:</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganbenda[]" value="B0 = Memasang mesin" id="hubunganjabatan_denganbenda_a">
                                <label class="form-check-label" for="hubunganjabatan_denganbenda_a">
                                    B0 = Memasang mesin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganbenda[]" value="B1 = Mengerjakan persisi" id="hubunganjabatan_denganbenda_b">
                                <label class="form-check-label" for="hubunganjabatan_denganbenda_b">
                                    B1 = Mengerjakan persisi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganbenda[]" value="B2 = Menjalankan - mengontrol mesin" id="hubunganjabatan_denganbenda_c">
                                <label class="form-check-label" for="hubunganjabatan_denganbenda_c">
                                    B2 = Menjalankan - mengontrol mesin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganbenda[]" value="B3 = Mengemudikan I menjalankan mesi" id="hubunganjabatan_denganbenda_d">
                                <label class="form-check-label" for="hubunganjabatan_denganbenda_d">
                                    B3 = Mengemudikan I menjalankan mesin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganbenda[]" value="B4 = Mengerjakan benda dengan tangan atau perkakas" id="hubunganjabatan_denganbenda_e">
                                <label class="form-check-label" for="hubunganjabatan_denganbenda_e">
                                    B4 = Mengerjakan benda dengan tangan atau perkakas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganbenda[]" value="B5 = Melayani mesin" id="hubunganjabatan_denganbenda_f">
                                <label class="form-check-label" for="hubunganjabatan_denganbenda_f">
                                    B5 = Melayani mesin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganbenda[]" value="B6 = Memasukkan, mengeluarkan barang ke/dari mesin" id="hubunganjabatan_denganbenda_g">
                                <label class="form-check-label" for="hubunganjabatan_denganbenda_g">
                                    B6 = Memasukkan, mengeluarkan barang ke/dari mesin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hubunganjabatan_denganbenda[]" value=" B7 = Memegang" id="hubunganjabatan_denganbenda_h">
                                <label class="form-check-label" for="hubunganjabatan_denganbenda_h">
                                    B7 = Memegang
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="jenjang_minimal" class="form-label">Jenjang Minimal:</label>
                        <select name="jenjang_minimal" id="jenjang_minimal" class="form-select" required>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan:</label>
                        <input type="text" name="jurusan" id="jurusan" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="pelatihan_fungsional" class="form-label">Pelatihan Fungsional:</label>
                        <input type="text" name="pelatihan_fungsional" id="pelatihan_fungsional" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="pelatihan_teknik" class="form-label">Pelatihan Teknik:</label>
                        <input type="text" name="pelatihan_teknik" id="pelatihan_teknik" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                            <option value="keduanya">Keduanya</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="umur_pertahun" class="form-label">Umur per Tahun:</label>
                        <input type="number" name="umur_pertahun" id="umur_pertahun" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="tinggibadan_percm" class="form-label">Tinggi Badan (cm):</label>
                        <input type="number" name="tinggibadan_percm" id="tinggibadan_percm" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="beratbadan_perkg" class="form-label">Berat Badan (kg):</label>
                        <input type="number" name="beratbadan_perkg" id="beratbadan_perkg" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="posturbadan" class="form-label">Postur Badan:</label>
                        <input type="text" name="posturbadan" id="posturbadan" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="penampilan" class="form-label">Penampilan:</label>
                        <input type="text" name="penampilan" id="penampilan" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('id_jabatan').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            document.getElementById('kode_jabatan').value = selectedOption.getAttribute('data-kode');
            document.getElementById('nama_jabatan').value = selectedOption.getAttribute('data-nama');
        });
    </script>
</body>
</html>
