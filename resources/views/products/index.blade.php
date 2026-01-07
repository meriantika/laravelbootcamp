@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Daftar Produk</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ($products as $product)
        <div class="bg-white shadow rounded p-4">
            <img 
                src="{{ asset('storage/' . $product->image) }}" 
                class="w-full h-48 object-cover mb-3 rounded"
            >

            <h2 class="font-bold text-lg">{{ $product->name }}</h2>
            <p class="text-sm text-gray-600">{{ $product->description }}</p>
            <p class="text-sm mt-1">Kategori: {{ $product->category->name }}</p>
            <p class="text-sm mt-1">Stok: {{ $product->stock }}</p>
        </div>
    @endforeach
</div>

<!-- PAGINATION -->
<div class="mt-6">
    {{ $products->links() }}
</div>
@endsection
