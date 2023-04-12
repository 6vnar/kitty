<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //id : 1
          Product::create([
            'id' => 1,
            'name' => 'shert',
            'description' => 'The Nike Air Max 90 Essential Men\'s Shoe is made with a mix of leather, synthetic leather and textile for a premium look and comfortable feel. The Max Air unit in the heel provides lightweight cushioning.',
            'price' => 50,
            'brand_id' => 1,
            'category_id' => 1,
            'user_id' => 1,
            'quantity' => 10,
            'discount' => 0,
            'rating' => 5,
            'status' => 1,
            'featured' => 1,
            'best_rated' => 1,
            'trend' => 1,
            'sale' => 0,
            'is_on_sale'=>true,
            'type'=>1,
            'image_path' => 'https://fastly.picsum.photos/id/152/3888/2592.jpg?hmac=M1xv1MzO9xjf5-tz1hGR9bQpNt973ANkqfEVDW0-WYU'
        ]);
        //id : 2
        Product::create([
            'id' => 2,
            'name' => 'Trousers',
            'description' => 'The Nike Air Max 90 Essential Men\'s Shoe is made with a mix of leather, synthetic leather and textile for a premium look and comfortable feel. The Max Air unit in the heel provides lightweight cushioning.',
            'price' => 30,
            'brand_id' => 1,
            'category_id' => 1,
            'user_id' => 1,
            'quantity' => 10,
            'discount' => 0,
            'rating' => 5,
            'status' => 1,
            'featured' => 1,
            'best_rated' => 1,
            'trend' => 1,
            'sale' => 0,
            'is_on_sale'=>true,
            'type'=>1,
            'image_path' => 'https://fastly.picsum.photos/id/152/3888/2592.jpg?hmac=M1xv1MzO9xjf5-tz1hGR9bQpNt973ANkqfEVDW0-WYU'
        ]);
        

    }
    }

