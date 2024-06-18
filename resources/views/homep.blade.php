<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1E5DA5;
            position: relative;
            min-height: 100vh;
            margin: 0;
            padding-bottom: 70px; /* Height of the pagination */
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
            position: relative;
        }
        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }
        .card-body {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px 0;
        }
        .pagination-container {
            position: absolute;
            bottom: 20px; /* 2cm from the bottom */
            width: 100%;
        }
        .pagination .page-item .page-link {
            color: white;
            background-color: #1E5DA5;
            border: none;
        }
        .pagination .page-item.active .page-link {
            background-color: white;
            color: #1E5DA5;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logoweb.png') }}" alt="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('homep') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list-produk') }}">List Produk</a>
                </li>
            </ul>
            <form class="form-inline ml-auto search-box">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/hijab1.jpg') }}" alt="Produk Terlaris">
                    <div class="card-body">
                        Produk Terlaris
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/hijab1.jpg') }}" alt="Rekomendasi Hijab">
                    <div class="card-body">
                        Rekomendasi Hijab
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/koko1.png') }}" alt="Rekomendasi Baju Koko">
                    <div class="card-body">
                        Rekomendasi Baju Koko
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/gamis2.jpg') }}" alt="Rekomendasi Gamis">
                    <div class="card-body">
                        Rekomendasi Gamis
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagination-container text-center">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&lt;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&gt;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>
