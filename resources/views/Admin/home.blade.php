<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>E - ANJAB - ABK | Home</title>
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
    /* Gaya untuk Konten */
        .content {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
        }

        .card-body {
            padding: 20px;
        }

        .badge {
            font-weight: 500;
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

        /* Responsif */
        @media (max-width: 768px) {
            .card-img-top {
                height: 180px;
            }

            .card-body {
                padding: 15px;
            }
        }
    /* Posisi footer yang tersembunyi di bawah */
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
                            <b>ANJAB - ABK</b>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 text-center text-lg-end mb-lg-0">
                    <div class="d-flex justify-content-end align-items-center" style="height: 45px;">
                        <span class="text-warning">PEMERINTAHAN KABUPATEN BANYUWANGI<br>
                            <span class="text-white">KABUPATEN BANYUWANGI<br></span>
                        </span>
                    </div>
                </div>
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
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/Admin/layanan" class="nav-item nav-link">Layanan</a>
                <a href="/Admin/contact" class="nav-item nav-link">Contact</a>
            </div>
            <div class="d-flex ms-auto">
                <a href="/login" class="btn rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0" style="background-color: #003A66; color: white;">Log In</a>
            </div>
        </div>
    </nav>
</div>
        <!-- Navbar & Hero End -->


        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ asset('Travisa/img/bg3.jpg') }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">KABUPATEN BANYUWANGI</h5>
                                <h2 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s"><p>Analisis Jabatan</p> Analisis Beban Kerja</h2>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">
                                    Selamat datang di Aplikasi Anjab - ABK Kabupaten Banyuwangi.
                                    Aplikasi ini dirancang untuk mendukung analisis jabatan dan beban kerja secara efisien dan terpadu.
                                    Silakan masuk untuk memulai dan mengakses fitur-fitur kami yang akan membantu optimalisasi kinerja Anda.
                                </p>

                                <a class="btn rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="/login" style="background-color: #003A66; color: white;">Log In</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('Travisa/img/bg2.jpg') }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">PEMERINTAHAN KABUPATEN BANYUWANGI</h4>
                                <h2 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s"><p>Analisis Jabatan</p> Analisis Beban Kerja</h2>
                                <!-- <h3 class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Republik Indonesia</h3> -->
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Republik Indonesia</h4>
                                <a class="btn rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="/login" style="background-color: #003A66; color: white;">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false" style="background-color: #003A66; color: white;"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false" style="background-color: #003A66; color: white;"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            </div>
        </div>

        <section class="content py-5">
            <div class="container">
                <!-- Teks di tengah -->
                <h3 class="text-primary text-center mb-4 mt-3">Informasi Konten</h3>

                <div class="row justify-content-center">
                    @forelse ($contents as $content)
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card shadow-lg h-100" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                                <!-- Gambar Konten -->
                                <div class="position-relative">
                                    @if ($content->image)
                                        <img src="{{ Storage::url('images/' . $content->image) }}" class="card-img-top img-fluid rounded" alt="{{ $content->title }}">
                                    @else
                                        <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top img-fluid rounded" alt="No Image">
                                    @endif
                                    <!-- Status -->
                                    <span class="badge position-absolute top-0 end-0 m-3 {{ $content->status == 'published' ? 'bg-success' : ($content->status == 'draft' ? 'bg-warning' : 'bg-secondary') }}">
                                        {{ ucfirst($content->status) }}
                                    </span>
                                </div>

                                <div class="card-body">
                                    <!-- Judul Konten -->
                                    <h5 class="card-title text-primary font-weight-bold">{{ $content->title }}</h5>
                                    <!-- Ringkasan Konten -->
                                    <p class="card-text text-muted">
                                        {{ $content->excerpt ?? 'Tidak ada ringkasan untuk konten ini.' }}
                                    </p>
                                </div>

                                <div class="card-footer bg-white border-0 text-center">
                                    <a href="{{ route('Admin.konten.show', $content->id) }}" class="btn btn-primary btn-sm px-4 py-2 rounded-pill shadow-sm" style="transition: background-color 0.3s ease;">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center text-muted">
                            <p>Tidak ada konten yang tersedia untuk ditampilkan.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

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
