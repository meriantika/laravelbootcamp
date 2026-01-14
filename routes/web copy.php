<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'home']);

Route::get('/cart', function () {
    return view('cart');
});

// ===== PRODUCT =====
Route::get('/products', [ProductController::class, 'index']);   
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
