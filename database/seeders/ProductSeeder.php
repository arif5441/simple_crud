<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['name' => 'Test1',
            'description' => 'This is description',
            'image' =>'product.png',
            'price' =>'100'],

            ['name' => 'Test2',
            'description' => 'This is description of product',
            'image' =>'product1.png',
            'price' =>'129']

        ]);
    }
}
