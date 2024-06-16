<!-- resources/views/lpgamis.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk Gamis</title>
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
        .content-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 56px); /* Subtract the height of the navbar */
            padding: 20px;
        }
        .product-detail {
            background-color: #1E5DA5;
            border-radius: 10px;
            padding: 20px;
            color: white;
            width: 80%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .product-detail img {
            border-radius: 10px;
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 20px;
        }
        .size-chart img {
            width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 10px;
        }
        .order-button {
            background-color: #33C1EA;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 20px;
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
                    <a class="nav-link" href="{{ route('homep') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('list-produk') }}">List Produk</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container content-container">
        <div class="product-detail">
            <img src="{{ asset('images/gamis.png') }}" alt="Product Image">
            <h5>Gamis</h5>
            <p>Rp. 25,000</p>
            <p>Ukuran Yang Tersedia</p>
            <p>XXS XS S M L XL XXL 3XL 4XL 5XL</p>
            <h6>Size Chart</h6>
            <div class="size-chart">
                <img src="{{ asset('images/size-chart.png') }}" alt="Size Chart">
            </div>
            <button class="order-button">Pesan</button>
        </div>
    </div>
</body>
</html>
