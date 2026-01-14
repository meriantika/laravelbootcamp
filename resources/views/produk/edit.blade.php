<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Edit Produk</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('produk.update', $produk->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- Kategori -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kategori</label>
                            <select name="kategori_id" class="form-select">
                                @foreach($kategoris as $k)
                                    <option value="{{ $k->id }}"
                                        {{ $produk->kategori_id == $k->id ? 'selected' : '' }}>
                                        {{ $k->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Nama -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Produk</label>
                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   value="{{ $produk->nama }}">
                        </div>

                        <!-- Stok -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Stok</label>
                            <input type="number"
                                   name="stok"
                                   class="form-control"
                                   value="{{ $produk->stok }}">
                        </div>

                        <!-- Harga -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Harga</label>
                            <input type="number"
                                   name="harga"
                                   class="form-control"
                                   value="{{ $produk->harga }}">
                        </div>

                        <!-- Tombol -->
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary">
                                Update
                            </button>
                            <a href="{{ route('produk.index') }}" class="btn btn-outline-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
