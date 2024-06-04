<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #007bff;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        .sidebar a:hover {
            background-color: #0056b3;
        }
        .content {
            margin-left: 210px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center">
            <img src="path/to/profile.jpg" class="rounded-circle" alt="Profile Image" width="100">
            <h4 class="text-white">Deden Ihsan Fauzi</h4>
            <p class="text-white">Administrator</p>
        </div>
        <a href="#">Dashboard</a>
        <a href="#">Home</a>
        <a href="#">Profil</a>
        <a href="#">List Produk</a>
        <a href="#">Logout</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
