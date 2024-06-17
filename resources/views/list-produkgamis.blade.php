<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Gamis</title>
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
            <img src="{{ asset('images/logoweb.png') }}" alt="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homep') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('list-produk') }}">List Poduk</a>
                </li>
            </ul>
            <form class="form-inline ml-auto search-box">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
            </form>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="category-buttons">
            <button id="hijab-button">Hijab</button>
            <button class="active">Gamis</button>
            <button id="koko-button">Baju Koko</button>
        </div>

        <div class="row" id="product-container">
            <!-- Product cards will be inserted here by JavaScript -->
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            fetchProducts();

            function fetchProducts() {
                $.ajax({
                    url: 'http://localhost:8002/api/barangs', // Replace with your Lumen API endpoint
                    method: 'GET',
                    success: function(data) {
                        displayProducts(data);
                    },
                    error: function(error) {
                        console.error('Error fetching products:', error);
                    }
                });
            }

            function displayProducts(products) {
                const productContainer = $('#product-container');
                productContainer.empty(); // Clear existing products

                products.forEach(product => {
                    const productCard = `
                        <div class="col-md-6 col-lg-3">
                            <div class="product-card">
                                <img src="${product.image_url}" alt="${product.name}" class="img-fluid">
                                <h5>${product.name}</h5>
                                <p>Rp. ${product.price}</p>
                            </div>
                        </div>
                    `;
                    productContainer.append(productCard);
                });
            }
        });
        document.getElementById('hijab-button').addEventListener('click', function() {
            window.location.href = '{{ route("list-produk") }}'; // Replace with your actual route
        });
        document.getElementById('koko-button').addEventListener('click', function() {
            window.location.href = '{{ route("listprodukkoko") }}'; // Replace with your actual route
        });
    </script>
</body>
</html>
