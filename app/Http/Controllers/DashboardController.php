<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahProduk   = Produk::count();
        $jumlahKategori = Category::count();
        $jumlahKlik     = Produk::sum('klik');

        return view('dashboard.index', compact(
            'jumlahProduk',
            'jumlahKategori',
            'jumlahKlik'
        ));
    }
}
