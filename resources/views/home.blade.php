<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>E - ANJAB - ABK | Dashboard</title>
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
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/layanan" class="nav-item nav-link">Layanan</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
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
                        <img src="{{ asset('Travisa/img/bg2.jpg') }}" class="img-fluid" alt="Image">
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


        <!-- Content 1 Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Jabatan</h5>
                    </div>
                    <h1 class="display-5 mb-4">Analisis Jabatan</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="{{ asset('Travisa/img/service-1.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Job Visa</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Job Visa</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="{{ asset('Travisa/img/service-2.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Business Visa</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Business Visa</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="{{ asset('Travisa/img/service-3.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Diplometic Visa</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Diplometic Visa</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia fugit dolores nesciunt adipisci obcaecati veritatis cum, ratione aspernatur autem velit.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Content 1 End -->

        <!-- Content  Start -->
        <div class="container-fluid training overflow-hidden bg-light py-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">PEGAWAI</h5>
                    </div>
                    <h1 class="display-5 mb-4">Manajemen Pegawai</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="{{ asset('Travisa/img/training-1.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">IELTS</a>
                                    <a href="#" class="h4 text-white mb-0">Coaching</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">IELTS Coaching</h4></a>
                                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="{{ asset('Travisa/img/training-2.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">TOEFL</a>
                                    <a href="#" class="h4 text-white mb-0">Coaching</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">TOEFL Coaching</h4></a>
                                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="{{ asset('Travisa/img/training-3.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">PTE</a>
                                    <a href="#" class="h4 text-white mb-0">Coaching</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">PTE Coaching</h4></a>
                                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content 2 End -->

        
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