@extends('layouts.app')

@section('content')
<div class="text-center mb-12">
    <h1 class="text-4xl font-bold text-gray-900">Welcome to Our Store</h1>
    <p class="text-gray-600 mt-2">Discover our exclusive products below</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @foreach ($products as $product)
    <x-product-card
        name="{{ $product->name }}"
        description="{{ $product->description }}"
        image="{{ asset('storage/' . $product->image) }}"
    />
    @endforeach
</div>

<div class="mt-8 flex justify-center">
    {{ $products->links() }}
</div>

@endsection
