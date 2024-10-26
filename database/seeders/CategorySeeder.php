<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Conference']);
        Category::create(['name' => 'Workshop']);
        Category::create(['name' => 'Seminar']);
    }
}

