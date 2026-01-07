<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $category = Category::first();

        Product::create([
            'category_id' => $category->id,
            'name' => 'Urban Slim Series',
            'description' => 'Desain tipis dan ringan',
            'stock' => 10,
            'image' => 'products/jam1.jpg',
        ]);

        Product::create([
            'category_id' => $category->id,
            'name' => 'Apex Warrior Digital',
            'description' => 'Jam tangan outdoor tahan banting',
            'stock' => 5,
            'image' => 'products/jam2.jpg',
        ]);
    }
}
