<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E - ANJAB - ABK | Log In</title>
  <!-- Menambahkan link href CSS -->
   <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-10/assets/css/login-10.css">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Login 10 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <!-- <div class="mb-0">
          <div class="text-center mb-0">
            <img src="{{ asset('Travisa/img/banyuwangi.png') }}" style="width: 200px;">    
          </div>
          <h4 class="text-center mb-2">E - Anjab - ABK</h4>
          <p class="text-center mb-2">KABUPATEN BANYUWANGI</h5>
          
        </div> -->
        <div class="card border border-light-subtle rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <form action="#!">
              <p class="text-center mb-4">Or sign in using email</p>
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
                    <button class="btn btn-lg" type="submit" style="background-color: #003A66; color: white;">Log in</button>
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

 <!-- Bootstrap JS Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>