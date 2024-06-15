<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1E5DA5;
            position: relative;
            min-height: 100vh;
            margin: 0;
        }
        .navbar {
            background-color: #33C1EA;
        }
        .navbar-brand img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
        .nav-link.active {
            background-color: #258FD6;
            border-radius: 10px;
        }
        .search-box input {
            border-radius: 15px;
            padding: 5px 10px;
        }
        .card {
            background-color: #333;
            color: white;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            padding: 50px 0;
        }
        .profile-container {
            margin-top: 50px;
        }
        .profile-header {
            background-color: #258FD6;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .profile-body {
            background-color: #fff;
            color: black;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .profile-body img{
            width: 300px;
            
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="homep">
            <img src="{{ asset('images/logoweb.png') }}" alt="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homep') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list-produk') }}">List Poduk</a>
                </li>
            </ul>
            <form class="form-inline ml-auto search-box">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
            </form>
        </div>
    </nav>

    <div class="container profile-container">
        <div class="profile-header">
            <h2>Sejarah Singkat Butik Dend</h2>
        </div>
        <div class="profile-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/logoweb.png') }}" class="img-fluid rounded" alt="Foto Butik">
                </div>
                <div class="col-md-8">
                    <h3>Butik Dend</h3>
                    <p>
                        Butik Dend didirikan pada tahun XXXX dengan tujuan menyediakan busana berkualitas tinggi untuk semua kalangan. Kami selalu berkomitmen untuk menghadirkan produk-produk terbaik yang mengikuti tren fashion terkini. Dalam perjalanan kami, kami telah melayani ribuan pelanggan yang puas dengan layanan dan produk kami. Butik Dend terus berkembang dan berinovasi untuk memberikan pengalaman belanja yang terbaik bagi para pelanggan kami.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
