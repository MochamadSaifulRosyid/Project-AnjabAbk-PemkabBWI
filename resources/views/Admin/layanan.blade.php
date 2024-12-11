<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>E - ANJAB - ABK | Layanan</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

                <!-- Icon Font Stylesheet -->
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

                <!-- Libraries Stylesheet -->
                <link href="{{ asset('Travisa/lib/animate/animate.min.css') }}" rel="stylesheet">
                <link href="{{ asset('Travisa/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


                <!-- Customized Bootstrap Stylesheet -->
                <link href="{{ asset('Travisa/css/bootstrap.min.css') }}" rel="stylesheet">

                <!-- Template Stylesheet -->
                <link href="{{ asset('Travisa/css/style.css') }}" rel="stylesheet">
                <style>
                    .card {
                            border-radius: 15px;
                            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                            transition: transform 0.3s ease, box-shadow 0.3s ease;
                        }

                        .card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
                        }

                        .card-body {
                            padding: 20px;
                        }

                        .card-img-top {
                            object-fit: cover;
                            height: 200px;
                        }

                        .btn-primary {
                            background-color: #007bff;
                            color: white;
                            border-radius: 50px;
                            padding: 10px 20px;
                            transition: background-color 0.3s ease, transform 0.2s ease;
                        }

                        .btn-primary:hover {
                            background-color: #0056b3;
                            transform: scale(1.05);
                            text-decoration: none;
                        }
                    .footer {
                            position: fixed;
                            bottom: -100px;  /* Mulai tersembunyi di bawah */
                            left: 0;
                            width: 100%;
                            transition: bottom 0.9s ease; /* Animasi untuk muncul */
                            background-color: #343a40; /* Sesuaikan warna latar belakang */
                        }

                        /* Ketika footer muncul di layar */
                        .footer.visible {
                            bottom: 0;
                        }
                    </style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block" style="box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-5 text-center text-lg-start mb-lg-0">
                    <div class="d-flex">
                        <a class="text-white m-0">
                            <img src="{{ asset('Travisa/img/banyuwangi.png') }}" style="width: 100px;">
                            <b>E - ANJAB-ABK</b>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 text-center text-lg-end mb-lg-0">
                    <div class="d-flex justify-content-end align-items-center" style="height: 45px;">
                        <span class="text-warning">KEMENTERIAN DALAM NEGERI<br>
                            <span class="text-white">KABUPATEN BANYUWANGI<br></span>
                        </span>
                    </div>
                </div>
                <!-- <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal text-white"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-white"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal text-white"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-white"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fab fa-youtube fw-normal text-white"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#" class="text-white me-4"><i class="fas fa-envelope text-white fw-bold me-2"></i>Example@gmail.com</a>
                    <a href="#" class="text-white me-0"><i class="fas fa-phone-alt text-white fw-bold me-2"></i>+01234567890</a>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <!-- <h3 class="display-5 text-secondary m-0"><img src="{{ asset('Travisa/img/banyuwangi.png') }}">E - ANJAB - ABK</h3> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav d-flex flex-row py-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/Admin/layanan" class="nav-item nav-link active">Layanan</a>
                <a href="/Admin/contact" class="nav-item nav-link">Contact</a>
            </div>
            <div class="d-flex ms-auto">
                <a href="/login" class="btn rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0" style="background-color: #003A66; color: white;">Log In</a>
            </div>
        </div>
    </nav>
</div>
        <div class="container my-5">
            <h1 class="text-center mb-4">Layanan Kami</h1>
            <p class="text-center mb-5">Selamat datang di halaman layanan kami. Berikut adalah berbagai layanan yang kami tawarkan untuk membantu Anda mengelola analisis jabatan dan beban kerja. Kami berkomitmen untuk menyediakan solusi terbaik bagi instansi Anda dengan sistem yang efisien dan mudah digunakan.</p>

            <div class="row">
                <!-- Layanan 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-lg border-light rounded">
                        <img src="{{ asset('images/Analisis Pekerjaan yang Optimal.png') }}" class="card-img-top img-fluid rounded" alt="Layanan 1">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Analisis Jabatan</h5>
                            <p class="card-text">Layanan untuk menganalisis jabatan di lingkungan pemerintahan, membantu dalam pengelolaan sumber daya manusia yang lebih efisien.</p>
                            <div class="card-footer bg-white border-0 text-center">
                                <button type="button" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLayanan1" style="transition: background-color 0.3s ease;">
                                    Pelajari Lebih Lanjut
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Layanan 1 -->
                <div class="modal fade" id="modalLayanan1" tabindex="-1" aria-labelledby="modalLayanan1Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLayanan1Label">Analisis Jabatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Centered Image -->
                                <img src="{{ asset('images/Analisis Pekerjaan yang Optimal.png') }}" class="img-fluid mb-3 d-block mx-auto" alt="Analisis Jabatan">

                                <!-- Justified and indented paragraph -->
                                <p style="text-align: justify; text-indent: 2em;">
                                    Layanan untuk menganalisis jabatan di lingkungan pemerintahan, membantu dalam pengelolaan sumber daya manusia yang lebih efisien.
                                    Kami menggunakan metode yang terstruktur untuk menilai kebutuhan dan efektivitas jabatan yang ada.
                                    Dengan analisis ini, instansi dapat mengoptimalkan struktur organisasi dan mengidentifikasi potensi peningkatan dalam kinerja.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Layanan 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-lg border-light rounded">
                        <img src="{{ asset('images/OIP.jpeg') }}" class="card-img-top img-fluid rounded" alt="Layanan 3">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Pemetaan Jabatan</h5>
                            <p class="card-text">Layanan untuk memetakan struktur organisasi dan jabatan, membantu dalam visualisasi diagram hierarki jabatan yang jelas.</p>
                            <div class="card-footer bg-white border-0 text-center">
                                 <button type="button" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLayanan2" style="transition: background-color 0.3s ease;">
                                     Pelajari Lebih Lanjut
                                 </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Layanan 2 -->
                <div class="modal fade" id="modalLayanan2" tabindex="-1" aria-labelledby="modalLayanan2Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLayanan2Label">Pemetaan Jabatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Centered Image -->
                                <img src="{{ asset('images/OIP.jpeg') }}" class="img-fluid mb-3 d-block mx-auto" alt="Analisis Beban Kerja">

                                <!-- Justified and indented paragraph -->
                                <p style="text-align: justify; text-indent: 2em;">
                                    Pemetaan jabatan adalah proses untuk menggambarkan secara jelas posisi dan hubungan antar jabatan dalam struktur organisasi.
                                    Dengan layanan ini, Anda dapat melihat visualisasi diagram hierarki jabatan, memungkinkan untuk memahami jalur karier,
                                    dan melihat struktur organisasi dengan lebih mudah.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Layanan 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-lg border-light rounded">
                        <img src="{{ asset('images/Analisis-Beban-Kerja.jpg') }}" class="card-img-top img-fluid rounded" alt="Layanan 2">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Analisis Beban Kerja</h5>
                            <p class="card-text">Kami menyediakan layanan untuk menganalisis beban kerja pegawai secara efektif, memastikan distribusi pekerjaan yang merata dan efisien.</p>
                            <div class="card-footer bg-white border-0 text-center">
                                 <button type="button" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLayanan3" style="transition: background-color 0.3s ease;">
                                    Pelajari Lebih Lanjut
                                 </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Layanan 3 -->
                <div class="modal fade" id="modalLayanan3" tabindex="-1" aria-labelledby="modalLayanan3Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLayanan3Label">Analisis Beban Kerja</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Centered Image -->
                                <img src="{{ asset('images/Analisis-Beban-Kerja.jpg') }}" class="img-fluid mb-3 d-block mx-auto" alt="Pemetaan Jabatan">

                                <!-- Justified and indented paragraph -->
                                <p style="text-align: justify; text-indent: 2em;">
                                    Analisis beban kerja pegawai penting untuk memastikan distribusi pekerjaan yang merata dan efisien.
                                    Layanan ini menganalisis waktu yang dibutuhkan untuk menyelesaikan tugas-tugas pekerjaan, membantu dalam merancang jadwal kerja yang optimal,
                                    dan memastikan pegawai tidak mengalami kelebihan beban kerja.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Layanan 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow border-light">
                        <img src="{{ asset('images/Evaluasi kinerja pegawai.jpeg') }}" class="card-img-top" alt="layanan 4">
                        <div class="card-body">
                            <h5 class="card-title">Evaluasi Kinerja Pegawai</h5>
                            <p class="card-text">Layanan untuk mengevaluasi kinerja pegawai berdasarkan target kerja yang telah ditetapkan, membantu instansi memastikan pegawai bekerja secara optimal.</p>
                            <div class="card-footer bg-white border-0 text-center">
                                 <button type="button" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLayanan4" style="transition: background-color 0.3s ease;">
                                    Pelajari Lebih Lanjut
                                 </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalLayanan4" tabindex="-1" aria-labelledby="modalLayanan4Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLayanan4Label">Evaluasi Kinerja Pegawai</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('images/Evaluasi kinerja pegawai.jpeg') }}" class="img-fluid mb-3 d-block mx-auto" alt="Pemetaan Jabatan">
                                <p style="text-align: justify; text-indent: 2em;">
                                    Evaluasi kinerja pegawai membantu instansi dalam menilai pencapaian target kerja, memberikan umpan balik konstruktif, dan merancang program pengembangan kompetensi.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Layanan 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow border-light">
                        <img src="{{ asset('images/Pengelolaan Dokumen Organisasi.jpg') }}" class="card-img-top" alt="layanan 5">
                        <div class="card-body">
                            <h5 class="card-title">Pengelolaan Dokumen Organisasi</h5>
                            <p class="card-text">Layanan digitalisasi dan pengelolaan dokumen organisasi yang mempermudah pencarian dan pengelolaan data jabatan.</p>
                            <div class="card-footer bg-white border-0 text-center">
                                 <button type="button" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLayanan5" style="transition: background-color 0.3s ease;">
                                    Pelajari Lebih Lanjut
                                 </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalLayanan5" tabindex="-1" aria-labelledby="modalLayanan5Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLayanan5Label">Pengelolaan Dokumen Organisasi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('images/Pengelolaan Dokumen Organisasi.jpg') }}" class="img-fluid mb-3 d-block mx-auto" alt="Pemetaan Jabatan">
                                <p style="text-align: justify; text-indent: 2em;">
                                    Solusi digital untuk pengelolaan dokumen organisasi, mempermudah akses, pelacakan, dan penyimpanan data jabatan dan struktur organisasi.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Layanan 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow border-light">
                        <img src="{{ asset('images/Analisis Beban Unit Kerja.jpg') }}" class="card-img-top" alt="layanan 6">
                        <div class="card-body">
                            <h5 class="card-title">Analisis Beban Unit Kerja</h5>
                            <p class="card-text">Layanan untuk menganalisis beban kerja di tingkat unit organisasi, memastikan efisiensi pembagian tugas antar unit.</p>
                            <div class="card-footer bg-white border-0 text-center">
                                 <button type="button" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLayanan6" style="transition: background-color 0.3s ease;">
                                     Pelajari Lebih Lanjut
                                 </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalLayanan6" tabindex="-1" aria-labelledby="modalLayanan6Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLayanan6Label">Analisis Beban Unit Kerja</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('images/Analisis Beban Unit Kerja.jpg') }}" class="img-fluid mb-3 d-block mx-auto" alt="Pemetaan Jabatan">
                                <p style="text-align: justify; text-indent: 2em;">
                                    Analisis ini bertujuan untuk menilai kebutuhan sumber daya di tiap unit kerja, memastikan setiap unit memiliki beban yang sesuai kapasitasnya.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                        <!-- Layanan 7 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow border-light">
                                <img src="{{ asset('images/Evaluasi Struktur Organisasi.jpg') }}" class="card-img-top" alt="layanan 7">
                                <div class="card-body">
                                    <h5 class="card-title">Evaluasi Struktur Organisasi</h5>
                                    <p class="card-text">Layanan untuk mengevaluasi efektivitas struktur organisasi guna mendukung pencapaian tujuan instansi secara optimal.</p>
                                    <div class="card-footer bg-white border-0 text-center">
                                         <button type="button" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLayanan7" style="transition: background-color 0.3s ease;">
                                             Pelajari Lebih Lanjut
                                         </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for Layanan 7 -->
                        <div class="modal fade" id="modalLayanan7" tabindex="-1" aria-labelledby="modalLayanan7Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLayanan7Label">Evaluasi Struktur Organisasi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('images/Evaluasi Struktur Organisasi.jpg') }}"
                                             class="img-fluid mb-3 d-block mx-auto" alt="Pemetaan Jabatan">
                                        <p style="text-align: justify; text-indent: 2em;">
                                            Evaluasi struktur organisasi membantu instansi menilai kesesuaian posisi, jabatan, dan tanggung jawab yang ada
                                            dengan kebutuhan organisasi saat ini. Dengan layanan ini, kami membantu meningkatkan efisiensi dan produktivitas
                                            organisasi melalui restrukturisasi yang tepat.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Layanan 8 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow border-light">
                                <img src="{{ asset('images/Pelatihan dan Konsultasi SDM.jpg') }}" class="card-img-top" alt="layanan 8">
                                <div class="card-body">
                                    <h5 class="card-title">Pelatihan dan Konsultasi SDM</h5>
                                    <p class="card-text">Layanan pelatihan dan konsultasi untuk meningkatkan kapasitas sumber daya manusia dalam mendukung tugas dan fungsi jabatan.</p>
                                    <div class="card-footer bg-white border-0 text-center">
                                        <button type="button" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLayanan8" style="transition: background-color 0.3s ease;">
                                             Pelajari Lebih Lanjut
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for Layanan 8 -->
                        <div class="modal fade" id="modalLayanan8" tabindex="-1" aria-labelledby="modalLayanan8Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLayanan8Label">Pelatihan dan Konsultasi SDM</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('images/Pelatihan dan Konsultasi SDM.jpg') }}"
                                             class="img-fluid mb-3 d-block mx-auto" alt="Pemetaan Jabatan">
                                        <p style="text-align: justify; text-indent: 2em;">
                                            Kami menyediakan pelatihan dan konsultasi untuk meningkatkan kapasitas SDM instansi. Layanan ini mencakup
                                            pelatihan tentang pengelolaan jabatan, manajemen waktu, dan efisiensi kerja yang dirancang khusus untuk
                                            kebutuhan organisasi Anda.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Layanan 9 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card shadow border-light">
                                <img src="{{ asset('images/Pengembangan Sistem Informasi.png') }}" class="card-img-top" alt="layanan 9">
                                <div class="card-body">
                                    <h5 class="card-title">Pengembangan Sistem Informasi</h5>
                                    <p class="card-text">Layanan pengembangan sistem informasi untuk mendukung proses digitalisasi analisis jabatan dan beban kerja.</p>
                                    <div class="card-footer bg-white border-0 text-center">
                                         <button type="button" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLayanan9" style="transition: background-color 0.3s ease;">
                                              Pelajari Lebih Lanjut
                                         </button>
                                     </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for Layanan 9 -->
                        <div class="modal fade" id="modalLayanan9" tabindex="-1" aria-labelledby="modalLayanan9Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLayanan9Label">Pengembangan Sistem Informasi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('images/Pengembangan Sistem Informasi.png') }}"
                                             class="img-fluid mb-3 d-block mx-auto" alt="Pemetaan Jabatan">
                                        <p style="text-align: justify; text-indent: 2em;">
                                            Pengembangan sistem informasi bertujuan untuk mempermudah proses digitalisasi analisis jabatan dan beban kerja.
                                            Dengan layanan ini, kami membantu instansi Anda menciptakan sistem yang terintegrasi, efisien, dan mudah diakses,
                                            sesuai dengan kebutuhan organisasi modern.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>


            </div>
        </div>



        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4 footer">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6 text-center text-md-start mb-md-0">
                                <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2">Anjab-ABK</i></a>, Semua Hak Cipta Dilindungi.</span>
                            </div>
                            <div class="col-md-6 text-center text-md-end text-white">
                                PEMERINTAH KABUPATEN BANYUWANGI
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Copyright End -->
        <script>
                    let footer = document.querySelector('.footer'); // Pilih elemen footer

                    let isScrolling;
                    window.addEventListener('scroll', function (event) {
                        window.clearTimeout(isScrolling);

                        // Tambahkan class visible untuk menunjukkan footer setelah berhenti scroll
                        footer.classList.remove('visible');

                        // Tunggu hingga scroll berhenti selama 200ms, lalu munculkan footer
                        isScrolling = setTimeout(function() {
                            footer.classList.add('visible');
                        }, 200); // Bisa sesuaikan waktunya
                    });
                </script>
        <!-- JavaScript Libraries -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="{{ asset('Travisa/lib/wow/wow.min.js') }}"></script>
                <script src="{{ asset('Travisa/lib/easing/easing.min.js') }}"></script>
                <script src="{{ asset('Travisa/lib/waypoints/waypoints.min.js') }}"></script>
                <script src="{{ asset('Travisa/lib/counterup/counterup.min.js') }}"></script>
                <script src="{{ asset('Travisa/lib/owlcarousel/owl.carousel.min.js') }}"></script>

                <!-- Template Javascript -->
                <script src="{{ asset('Travisa/js/main.js') }}"></script>
    </body>

</html>
