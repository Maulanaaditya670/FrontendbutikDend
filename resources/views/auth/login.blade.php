<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #b3b3b3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #d9d9d9;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-logo {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
            border-radius: 50%;
            background: url('/path/to/logo.png') no-repeat center center;
            background-size: cover;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .form-group label {
            margin-bottom: 5px;
            display: block;
            text-align: left;
        }
        .btn-primary {
            background-color: #00aaff;
            border-color: #00aaff;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-logo"></div>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</body>
</html>
