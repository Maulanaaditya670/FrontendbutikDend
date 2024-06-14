<!-- resources/views/list-produk.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
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
        .category-buttons {
            margin: 20px 0;
            text-align: center;
        }
        .category-buttons button {
            margin: 5px;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            background-color: #258FD6;
            color: white;
            cursor: pointer;
        }
        .category-buttons button.active {
            background-color: #1E5DA5;
        }
        .product-card {
            background-color: #fff;
            color: black;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            padding: 20px;
        }
        .pagination-container {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
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
            <img src="logo.png" alt="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">List Produk</a>
                </li>
            </ul>
            <form class="form-inline ml-auto search-box">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="category-buttons">
            <button class="active">Hijab</button>
            <button>Gamis</button>
            <button>Baju Koko</button>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid">
                    <h5>Nama</h5>
                    <p>Rp. 25,000</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid">
                    <h5>Nama</h5>
                    <p>Rp. 25,000</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid">
                    <h5>Nama</h5>
                    <p>Rp. 25,000</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid">
                    <h5>Nama</h5>
                    <p>Rp. 25,000</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid">
                    <h5>Nama</h5>
                    <p>Rp. 25,000</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid">
                    <h5>Nama</h5>
                    <p>Rp. 25,000</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid">
                    <h5>Nama</h5>
                    <p>Rp. 25,000</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="product-card">
                    <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid">
                    <h5>Nama</h5>
                    <p>Rp. 25,000</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="pagination-container">
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
