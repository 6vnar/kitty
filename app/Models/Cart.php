<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'quantity',
        'price',
        'total_price',
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
    
}
