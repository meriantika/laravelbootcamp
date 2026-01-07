<?php

namespace App\Http\Controllers;

use App\Models\Product;

public function home()
{
    $products = Product::with('category')->paginate(6);
    return view('home', compact('products'));
}

