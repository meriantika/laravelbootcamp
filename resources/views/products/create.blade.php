@extends('layouts.app')

@section('content')
<h1>Tambah Produk</h1>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label>Nama Produk</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Deskripsi</label>
        <textarea name="description"></textarea>
    </div>

    <div>
        <label>Stok</label>
        <input type="number" name="stock" required>
    </div>

    <div>
        <label>Gambar</label>
        <input type="file" name="image" required>
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
