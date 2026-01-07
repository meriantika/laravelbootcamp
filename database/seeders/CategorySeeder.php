<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Jam Tangan']);
        Category::create(['name' => 'Aksesoris']);
        Category::create(['name' => 'Elektronik']);
    }
}
