<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::with('category')->paginate(6);
        return view('home', compact('products'));
    }
}
