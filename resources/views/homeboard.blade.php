<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        .table-container {
            margin-top: 20px;
            position: relative;
        }
        .table-container .btn {
            margin-right: 10px;
        }
        .table-container table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }
        .table-container th, .table-container td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .table-container th {
            background-color: #f2f2f2;
        }
        .table-container tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table-container .search-container {
            position: absolute;
            top: 0;
            right: 0;
        }
        .table-container .search-container input {
            margin-left: 5px;
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
            <a href="#">Dashboard</a>
            <a href="#">Home</a>
            <a href="#">Profil</a>
            <a href="#">List Produk</a>
            <a href="#">Logout</a>
        </div>
    </div>
    <div class="main-content">
        <h1>Home</h1>
        <div class="table-container">
            <button class="btn btn-primary">Tambah</button>
            <button class="btn btn-danger">Delete</button>
            <div class="search-container">
                <label for="search">Search: </label>
                <input type="text" id="search">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Postingan</th>
                        <th>Penulis</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row -->
                    <tr>
                        <td>1</td>
                        <td>Contoh Postingan</td>
                        <td>Deden Ihsan Fauzi</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <p>Show 
                    <select>
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select> 
                    entries
                </p>
            </div>
            <div>
                <p>< 1 2 3 ></p>
            </div>
        </div>
    </div>
</body>
</html>
