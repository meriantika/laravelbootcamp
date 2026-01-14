<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Category::all();
        return view('kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        // balik ke halaman sebelumnya (modal/list)
        return redirect()->back();
    }

    public function edit($id)
    {
        $kategori = Category::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        Category::findOrFail($id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('kategori.index');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('kategori.index');
    }
}
