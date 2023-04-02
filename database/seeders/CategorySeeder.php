<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'stockings',
            'description' => 'stockings',
            'image' => 'https://www.nike.com/w/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/4b9b3b1a-1b1a-4b1c-9b1c-1b1a4b9b1a1b/nike-air-max-90-essential-shoe-1J1xJx.jpg'

        ]);
        

    }
}
