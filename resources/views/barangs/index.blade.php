@extends('layout')

@section('title', 'Barang')

@section('content')
<div class="container mt-5">
    <h1>Home</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Description</th>
                <th>Price</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $index => $barang)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $barang['name'] }}</td>
                    <td>{{ $barang['description'] }}</td>
                    <td>{{ $barang['price'] }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $barang['id']) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('barang.destroy', $barang['id']) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
