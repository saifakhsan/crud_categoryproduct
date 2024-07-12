<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(to right, #007bff, #0056b3);
        }
        .form-control {
            border-radius: 30px;
        }
        .btn-primary {
            border-radius: 30px;
            background: linear-gradient(to right, #007bff, #0056b3);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #0056b3, #003d80);
        }
        .alert-danger {
            border-radius: 30px;
        }
        .form-group label {
            font-weight: bold;
        }
        .my-3 a {
            color: #007bff;
        }
        .my-3 a:hover {
            color: #0056b3;
        }
    </style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center text-white bg-primary">Login</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <div class="my-3 text-center">
                            <a href="{{ route('password.request') }}" class="btn btn-link">Forgot Your Password?</a>
                            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
