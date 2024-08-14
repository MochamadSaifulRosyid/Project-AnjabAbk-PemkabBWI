<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>E - ANJAB - ABK | Contact</title>
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
                <a href="/layanan" class="nav-item nav-link">Layanan</a>
                <a href="/contact" class="nav-item nav-link active">Contact</a>
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
                        <img src="{{ asset('Travisa/img/carousel-4.jpg') }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Kementerian Dalam Negeri</h5>
                                <h2 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s"><p>Analisis Jabatan</p> Analisis Beban Kerja</h2>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Selamat Datang di aplikasi e-Anjab-ABK Kementerian Dalam Negeri Republik Indonesia
                                Untuk memulai silahkan isikan username dan password anda, kemudian klik tombol Log In untuk masuk ke dalam aplikasi
                                </p>
                                <!-- <a class="btn rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="/login" style="background-color: #003A66; color: white;">Log In</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('Travisa/img/carousel-3.jpg') }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Kementerian Dalam Negeri</h4>
                                <h2 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s"><p>Analisis Jabatan</p> Analisis Beban Kerja</h2>
                                <!-- <h3 class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Republik Indonesia</h3> -->
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Republik Indonesia</h4>
                                <!-- <a class="btn rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="/login" style="background-color: #003A66; color: white;">Log In</a> -->
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
        <!-- Carousel End -->

        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Contact</h5>
                        </div>
                        <h2 class="display-5 mb-4">Hubungi Kami!</h2>
                        <p class="mb-0"></p>
                        <div class="d-flex border-bottom mb-4 pb-4">
                            <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                            <div class="ps-3">
                                <h5>Location</h5>
                                <p style="font-size: 1.25rem; color: #003A66;">Jl. Jenderal Ahmad Yani No.100, Taman Baru, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68416</p>
                                <p>Kantor Pemerintah Daerah Kabupaten Banyuwangi</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-xl-6">
                                <div class="d-flex">
                                    <i class="fas fa-tty fa-3x text-primary"></i>
                                    <div class="ps-3">
                                        <h5 class="mb-3">Quick Contact</h5>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Phone:</h6>
                                            <a href="#" class="fs-5 text-primary">+012 3456 7890</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Email:</h6>
                                            <a href="#" class="fs-5 text-primary">travisa@example.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex">
                                    <i class="fas fa-clone fa-3x text-primary"></i>
                                    <div class="ps-3">
                                        <h5 class="mb-3">Jam Layanan</h5>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Senin - Kamis</h6>
                                            <a href="#" class="fs-5 text-primary">07.00 am to 15.30 pm</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Jumat</h6>
                                            <a href="#" class="fs-5 text-primary">06.30 am to 14.30 pm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Contact End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>e-Anjab-ABK</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        PEMERINTAH KABUPATEN BANYUWANGI
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

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