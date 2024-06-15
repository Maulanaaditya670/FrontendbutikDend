<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #00aaff;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .sidebar {
            background-color: #f8f9fa;
            width: 250px;
            height: 100vh;
            padding: 20px;
            position: fixed;
        }
        .sidebar .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .sidebar .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .sidebar .profile div {
            line-height: 1.2;
        }
        .sidebar .profile div p {
            margin: 0;
        }
        .sidebar .menu {
            margin-top: 20px;
        }
        .sidebar .menu a {
            display: block;
            color: #007bff;
            text-decoration: none;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar .menu a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .main-content h1 {
            background-color: #2f6fa8;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        .product-list {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .product-list .product-item {
            background-color: #00aaff;
            padding: 20px;
            border-radius: 5px;
            color: #fff;
            text-align: center;
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="/path/to/profile.jpg" alt="Profile">
    </div>
    <div class="sidebar">
        <div class="profile">
            <img src="/path/to/profile.jpg" alt="Profile">
            <div>
                <p>Deden Ihsan Fauzi</p>
                <p>Administrator</p>
            </div>
        </div>
        <div class="menu">
            <a href="{{ route('dashboard') }}" >Dashboard</a>
            <a href="{{ route('homeboard') }}" >Home</a>
            <a href="{{ route('profile') }}" >Profile</a>
            <a href="{{ route('listproduk') }}" >List Produk</a>
            <a href="{{ route('login') }}" >Logout</a>
        </div>
    </div>
    <div class="main-content">
        <h1>List Produk</h1>
        <div class="product-list">
            <div class="product-item">Gamis</div>
            <div class="product-item">Koko</div>
            <div class="product-item">Hijab</div>
        </div>
    </div>
</body>
</html>
