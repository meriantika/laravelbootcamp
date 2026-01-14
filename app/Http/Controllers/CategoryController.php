<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('kategori.index', compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        Category::findOrFail($id)->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->back();
    }
}

