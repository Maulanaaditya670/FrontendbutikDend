<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Gamis</title>
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
        .table-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="{{ asset('images/user.png') }}" alt="Profile">
    </div>
    <div class="sidebar">
        <div class="profile">
            <img src="{{ asset('images/user.png') }}" alt="Profile">
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
        <h1>List Produk > Gamis</h1>
        <div class="table-container">
            <a href="{{ route('tambahgamis') }}" class="btn btn-primary">Tambah</a>
            <input type="text" placeholder="Search" style="float: right; margin-bottom: 10px;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kode Barang</th>
                        <th>Harga Barang</th>
                        <th>Ukuran Barang</th>
                        <th>Gambar Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $index => $barang)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $barang['name'] }}</td>
                        <td>{{ $barang['kode'] }}</td>
                        <td>{{ $barang['price'] }}</td>
                        <td>{{ $barang['size'] }}</td>
                        <td>{{ $barang['image'] }}</td>
                        <td>
                            <button class="btn btn-danger" onclick="deleteBarang({{ $barang['id'] }})">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
        </div>
    </div>
    <script>
        async function deleteBarang(id) {
            if (confirm('Apakah Anda yakin ingin menghapus barang ini?')) {
                try {
                    const response = await fetch(`http://localhost:8002/api/barangs/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    });

                    if (response.ok) {
                        alert('Barang berhasil dihapus');
                        location.reload(); // Refresh halaman setelah penghapusan berhasil
                    } else {
                        const errorText = await response.text(); // Baca teks respons
                        console.error('Gagal menghapus barang:', errorText);
                        alert('Gagal menghapus barang: ' + errorText);
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menghapus barang: ' + error.message);
                }
            }
        }
    </script>
</body>
</html>
