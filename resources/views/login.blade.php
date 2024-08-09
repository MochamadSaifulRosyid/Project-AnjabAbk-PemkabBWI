<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>E - ANJAB - ABK | Log In</title>
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
            <div class="navbar-nav d-flex flex-row py-10">
                <a href="/dashboard" class="nav-item nav-link">Home</a>
                <a href="/layanan" class="nav-item nav-link">Layanan</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
        <!-- Navbar & Hero End -->

 <!-- Form Login -->
<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="mb-5">
          <h4 class="text-center mb-2">Selamat Datang,</h4>
          <h4 class="text-center mb-2">Silahkan Log In</h4>
          <div class="text-center">
          </div>
        </div>
        <div class="card border border-light-subtle rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <form action="#!">
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="username" class="form-control" name="username" id="username" placeholder="Username" required>
                    <label for="username" class="form-label">Username</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Remember me
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-lg" type="submit" style="background-color: #003A66; color: white;">Log In</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-4">
          <!-- <a href="#!" class="link-secondary text-decoration-none">Create new account</a> -->
          <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
        </div>
      </div>
    </div>
  </div>
</section>

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