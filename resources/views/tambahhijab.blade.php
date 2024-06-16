<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gamis</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #00aaff;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 5px;
            right: 25px;
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
        .form-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .form-container input[type="text"],
        .form-container input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container input[type="file"] {
            margin-bottom: 10px;
        }
        .form-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="{{ asset('images/user.png') }}" alt="Profile">
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
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('homeboard') }}">Home</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('listproduk') }}">List Produk</a>
            <a href="{{ route('login') }}">Logout</a>
        </div>
    </div>
    <div class="main-content">
        <h1>List Produk > Gamis > Tambah Hijab</h1>
        <div class="form-container">
            <form id="tambahHijabForm" enctype="multipart/form-data">
                <label for="name">Nama Barang</label>
                <input type="text" id="name" name="name">
                
                <label for="kode">Kode Barang</label>
                <input type="text" id="kode" name="kode">
                
                <label for="price">Harga Barang</label>
                <input type="number" id="price" name="price">
                
                <label for="size">Ukuran</label>
                <input type="text" id="size" name="size">
                
                <label for="image">Insert Picture</label>
                <input type="file" id="image" name="image">
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('tambahHijabForm').addEventListener('submit', async function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    try {
        const response = await fetch('http://localhost:8002/api/hijabs', {
            method: 'POST',
            body: formData
        });
        
        if (response.ok) {
            const result = await response.json();
            alert('Data berhasil disimpan');
            console.log(result);
        } else {
            const errorText = await response.text(); // Baca teks respons
            console.error('Gagal menyimpan data:', errorText);
            alert('Gagal menyimpan data: ' + errorText);
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat menyimpan data: ' + error.message);
    }
});


    </script>
</body>
</html>
