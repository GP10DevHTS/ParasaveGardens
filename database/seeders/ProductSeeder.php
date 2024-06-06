<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            'Teas' => [
                ['name' => "Hot milk",
                // 'description',
                'is_sellable' ,
                'is_buyable',
                'is_manufacturable'
                ]
            ], 
            'Accompaniments' => [], 
            'Spirits' => [], 
            'Wines' => [], 
            'Energy Drinks' => [], 
            'Refreshments' => [], 
            'Fruit Salad' => [], 
            'Beers' => [], 
            'Whiskey' => [], 
            'Main Meals' => [],
        ];
    }
}
