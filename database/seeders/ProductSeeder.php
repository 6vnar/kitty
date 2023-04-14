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
            'image_path' => 'images\clothes\ok.png'
        ]);
        //id : 2
        Product::create([
            'id' => 2,
            'name' => 'بلوزة',
            'description' => 'The Nike Air Max 90 Essential Men\'s Shoe is made with a mix of leather, synthetic leather and textile for a premium look and comfortable feel. The Max Air unit in the heel provides lightweight cushioning.',
            'price' => 30,
            'brand_id' => 2,
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
            'image_path' => 'images\clothes\ok.png'
        ]);
        //id : 1
        Product::create([
            'id' => 3,
            'name' => 'مسكارة',
            'description' => 'The Nike Air Max 90 Essential Men\'s Shoe is made with a mix of leather, synthetic leather and textile for a premium look and comfortable feel. The Max Air unit in the heel provides lightweight cushioning.',
            'price' => 50,
            'brand_id' => 1,
            'category_id' => 4,
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
            'image_path' => 'images\makeup\up2.png'
        ]);
        //id : 1
        Product::create([
            'id' => 4,
            'name' => 'مسكارة',
            'description' => 'The Nike Air Max 90 Essential Men\'s Shoe is made with a mix of leather, synthetic leather and textile for a premium look and comfortable feel. The Max Air unit in the heel provides lightweight cushioning.',
            'price' => 50,
            'brand_id' => 1,
            'category_id' => 4,
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
            'image_path' => 'images\makeup\up2.png'
        ]);
        //id : 1
        Product::create([
            'id' => 5,
            'name' => 'مسكارة',
            'description' => 'The Nike Air Max 90 Essential Men\'s Shoe is made with a mix of leather, synthetic leather and textile for a premium look and comfortable feel. The Max Air unit in the heel provides lightweight cushioning.',
            'price' => 50,
            'brand_id' => 1,
            'category_id' => 4,
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
            'image_path' => 'images\makeup\up2.png'
        ]);
        //id : 1
        Product::create([
            'id' => 6,
            'name' => 'مسكارة',
            'description' => 'The Nike Air Max 90 Essential Men\'s Shoe is made with a mix of leather, synthetic leather and textile for a premium look and comfortable feel. The Max Air unit in the heel provides lightweight cushioning.',
            'price' => 50,
            'brand_id' => 1,
            'category_id' => 4,
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
            'image_path' => 'images\makeup\up2.png'
        ]);
        //id : 1
        Product::create([
            'id' => 7,
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
            'image_path' => 'images\clothes\ok.png'
        ]);
        

    }
    }

