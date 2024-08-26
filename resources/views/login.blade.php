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
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #ffffff;
        }
        .login-card h1 {
            margin-bottom: 1rem;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #333;
        }
        .login-card .form-label {
            font-weight: 500;
        }
        .login-card .form-control {
            border-radius: 6px;
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        }
        .login-card .btn-primary {
            border-radius: 6px;
            padding: 0.75rem 1.25rem;
        }
        .login-card .alert {
            margin-bottom: 1rem;
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
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>
</html>