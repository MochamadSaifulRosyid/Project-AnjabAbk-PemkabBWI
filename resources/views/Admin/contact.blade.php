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
        <style>
            /* Contact Section Styles */
            .contact {
                background-color: #f8f9fa;
            }

            .sub-style .sub-title {
                font-size: 1.25rem;
                color: #003A66;
            }

            .display-5 {
                font-size: 2.5rem;
                color: #003A66;
            }

            .form-floating input, .form-floating textarea {
                font-size: 1.1rem;
                border: 1px solid #ccc;
            }

            .form-floating label {
                font-size: 1.1rem;
                color: #555;
            }

            .text-primary {
                color: #003A66;
            }

            .fs-5 {
                font-size: 1rem;
            }

            .text-muted {
                color: #6c757d;
            }

            .mb-3 {
                margin-bottom: 1rem;
            }

            .btn-primary {
                background-color: #003A66;
                border: none;
                font-size: 1.1rem;
                padding: 10px 25px;
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
                <a href="/Admin/layanan" class="nav-item nav-link">Layanan</a>
                <a href="/Admin/contact" class="nav-item nav-link active">Contact</a>
            </div>
            <div class="d-flex ms-auto">
                <a href="/login" class="btn rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0" style="background-color: #003A66; color: white;">Log In</a>
            </div>
        </div>
    </nav>
</div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5" style="background-color: #f8f9fa;">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <!-- Left Column -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Contact</h5>
                        </div>
                        <h2 class="display-5 mb-4">Ada Pertanyaan? Hubungi Kami!</h2>
                        <div class="d-flex border-bottom mb-4 pb-4">
                            <i class="fas fa-map-marked-alt fa-3x text-primary bg-light p-3 rounded"></i>
                            <div class="ps-3">
                                <h5>Location</h5>
                                <p class="text-muted">Jl. Jenderal Ahmad Yani No.100, Taman Baru, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68416</p>
                                <p class="text-muted">Kantor Pemerintah Daerah Kabupaten Banyuwangi</p>
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
                                            <a href="tel:+01234567890" class="fs-5 text-primary">+62 333 428675</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Email:</h6>
                                            <a href="mailto:travisa@example.com" class="fs-5 text-primary">mail.banyuwangikab.go.id</a>
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
                                            <span class="fs-5 text-primary">07.00 am to 15.30 pm</span>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Jumat</h6>
                                            <span class="fs-5 text-primary">06.30 am to 14.30 pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (Form) -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Let’s Connect</h5>
                        </div>
                        <h1 class="display-5 mb-4">Kirim Pesan Anda</h1>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/Admin/contact') }}" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone" required>
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height: 100px;" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary rounded-pill py-3 px-5">Send Message</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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
