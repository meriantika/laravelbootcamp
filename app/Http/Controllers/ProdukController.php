<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Category;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::orderBy('id', 'desc')->paginate(5);
        return view('produk.index', compact('produks'));
    }

    public function create()
    {
        $kategoris = Category::all();
        return view('produk.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        Produk::create($request->all());
        return redirect()->route('produk.index');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategoris = Category::all();
        return view('produk.edit', compact('produk','kategoris'));
    }

    public function update(Request $request, $id)
    {
        Produk::findOrFail($id)->update($request->all());
        return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        Produk::findOrFail($id)->delete();
        return redirect()->route('produk.index');
    }
}
