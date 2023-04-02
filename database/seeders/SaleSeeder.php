<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
            'user_id' => 1,
            'product_id'  => 1,
            'quantity' => 2,
            'status' => 1,
            'payment_method' => 'Cash on Delivery',
            'payment_status' => 'Paid',
            'currency' => 'USD',
            'grand_total' => 100,
            
        ]);
    }
}
