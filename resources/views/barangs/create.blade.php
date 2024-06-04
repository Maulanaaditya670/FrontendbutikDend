<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
</head>
<body>
    <div class="container">
        <h1>Tambah Barang</h1>
        <form action="{{ route('barangs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Barang:</label>
                <input type="text" id="name" name="name" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <input type="text" id="description" name="description" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="price">Harga:</label>
                <input type="number" id="price" name="price" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="description">Size:</label>
                <input type="text" id="size" name="size" class="form-control" required />
            </div>
            <div class="form-group">
                <label for="image">Gambar:</label>
                <input type="file" id="image" name="image" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <a href="{{ route('barangs.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Barang</a>
    </div>
</body>
</html>
