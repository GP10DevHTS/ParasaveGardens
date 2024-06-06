<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Teas', 'description' => 'Teas'],
            ['name' => 'Accompaniments', 'description' => 'Accompaniments'],
            ['name' => 'Spirits', 'description' => 'Spirits'],
            ['name' => 'Wines', 'description' => 'Wines'],
            ['name' => 'Energy Drinks', 'description' => 'Energy Drinks'],
            ['name' => 'Refreshments', 'description' => 'Refreshments'],
            ['name' => 'Fruit Salad', 'description' => 'Fruit Salad'],
            ['name' => 'Beers', 'description' => 'Beers'],
            ['name' => 'Whiskey', 'description' => 'Whiskey'],
            ['name' => 'Main Meals', 'description' => 'Served with rice or Irish or Potatoes or French Fries'],
        ];


        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}
