<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(135deg, #6e7dff, #a9c0ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
            position: relative;
        }
        .login-card {
            z-index: 10;
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: #ffffff;
            transition: all 0.3s;
        }
        .login-card:hover {
            transform: translateY(-5px);
        }
        .login-card h1 {
            margin-bottom: 1rem;
            font-size: 26px;
            font-weight: bold;
            text-align: center;
            color: #333;
        }
        .login-card .form-label {
            font-weight: 500;
            color: #555;
        }
        .login-card .form-control {
            border-radius: 10px;
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            transition: border-color 0.3s;
        }
        .login-card .form-control:focus {
            border-color: #6e7dff;
            box-shadow: 0 0 5px rgba(110, 125, 255, 0.5);
        }
        .login-card .btn-primary {
            border-radius: 10px;
            padding: 0.75rem 1.25rem;
            background: #6e7dff;
            border: none;
        }
        .login-card .btn-primary:hover {
            background: #5661d2;
        }
        .login-card .alert {
            margin-bottom: 1rem;
        }

        /* Animasi Awan */
        .cloud {
            position: absolute;
            background: white;
            opacity: 0.9;
            animation: moveClouds linear infinite;
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.8);
        }

        @keyframes moveClouds {
            0% { transform: translateX(-200px); }
            100% { transform: translateX(100vw); }
        }

    </style>
</head>
<body>
    <div class="login-card">
        <h1>Login</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="login" class="form-label">Email atau Username</label>
                <input type="text" value="{{ old('login') }}" name="login" class="form-control" placeholder="Masukkan email atau username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <div class="d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

    <script>
        function createClouds() {
            const cloudCount = 3; // Mengurangi jumlah awan menjadi 3
            const cloudDelay = 2000; // Delay antara kemunculan paket dalam milidetik

            for (let i = 0; i < cloudCount; i++) {
                const cloud = document.createElement('div');
                cloud.classList.add('cloud');

                // Mengatur ukuran dan posisi acak
                const size = Math.random() * 40 + 60; // Ukuran acak antara 60px hingga 100px
                cloud.style.width = `${size}px`;
                cloud.style.height = `${size / 1.5}px`;
                cloud.style.top = `${Math.random() * 20 + 10}%`; // Posisi acak antara 10% hingga 30%
                cloud.style.left = '-100px';
                cloud.style.animationDuration = `${Math.random() * 20 + 30}s`; // Durasi acak antara 30s hingga 50s
                cloud.style.animationDelay = `${Math.random() * 5}s`; // Delay acak dalam paket

                document.body.appendChild(cloud);

                // Deteksi tabrakan
                cloud.addEventListener('animationiteration', () => {
                    const clouds = document.querySelectorAll('.cloud');
                    clouds.forEach(otherCloud => {
                        if (cloud !== otherCloud && isColliding(cloud, otherCloud)) {
                            // Terapkan efek "terpental"
                            cloud.style.transform = `translateX(-10px)`;
                            setTimeout(() => {
                                cloud.style.transform = '';
                            }, 100);
                        }
                    });
                });
            }
        }

        function isColliding(cloud1, cloud2) {
            const rect1 = cloud1.getBoundingClientRect();
            const rect2 = cloud2.getBoundingClientRect();
            return !(
                rect1.right < rect2.left ||
                rect1.left > rect2.right ||
                rect1.bottom < rect2.top ||
                rect1.top > rect2.bottom
            );
        }

        // Munculkan paket awan setiap beberapa detik
        setInterval(createClouds, 7000); // Paket muncul setiap 5 detik
    </script>
</body>
</html>
