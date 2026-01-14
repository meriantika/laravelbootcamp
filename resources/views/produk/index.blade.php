@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Produk</h3>
        <a href="{{ route('produk.create') }}" class="btn btn-primary">
            Tambah Produk
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th width="60">ID</th>
                <th>Nama</th>
                <th width="100">Stok</th>
                <th width="150">Harga</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produks as $produk)
                <tr>
                    <td>{{ $produk->id }}</td>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $produk->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('produk.destroy', $produk->id) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus produk ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        Data produk kosong
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- PAGINATION -->
    <div class="d-flex justify-content-center">
        {{ $produks->links() }}
    </div>

</div>
@endsection
