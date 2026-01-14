@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Dashboard</h3>

    <div class="row">

        <!-- JUMLAH PRODUK -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h6 class="text-muted">Jumlah Produk</h6>
                    <h2 class="fw-bold">{{ $jumlahProduk }}</h2>
                </div>
            </div>
        </div>

        <!-- JUMLAH KATEGORI -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h6 class="text-muted">Jumlah Kategori</h6>
                    <h2 class="fw-bold">{{ $jumlahKategori }}</h2>
                </div>
            </div>
        </div>

        <!-- JUMLAH KLIK -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h6 class="text-muted">Jumlah Klik Produk</h6>
                    <h2 class="fw-bold">{{ $jumlahKlik }}</h2>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
