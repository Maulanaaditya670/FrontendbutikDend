@extends('layout')

@section('title', isset($barang) ? 'Edit Barang' : 'Tambah Barang')

@section('content')
<div class="container mt-5">
    <h1>{{ isset($barang) ? 'Edit' : 'Tambah' }} Barang</h1>
    <form action="{{ isset($barang) ? route('barang.update', $barang['id']) : route('barang.store') }}" method="POST">
        @csrf
        @if(isset($barang))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ isset($barang) ? $barang['nama'] : '' }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ isset($barang) ? $barang['deskripsi'] : '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ isset($barang) ? $barang['harga'] : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($barang) ? 'Update' : 'Tambah' }}</button>
    </form>
</div>
@endsection
