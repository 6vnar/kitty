<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_path',
        'category_id',
        'brand_id',
        'user_id',
        'discount',
        'quantity',
    ];
    #Relationships

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Favorite::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    ### add ###
    public function add($data)
    {
        $this->fill($data);
        $this->save();
    }
    ### End add ###

    ### edit ###
    public function edit($data)
    {
        $this->update($data);
    }
    ### End edit ###


            ### image ###

    //add_image
    public function add_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/cars/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/cars/' . $this->id . '/images/' . $name;
        $this->save();
    }

    //update_image
    public function update_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/cars/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/cars/' . $this->id . '/images/' . $name;
        $this->save();
    }

    ### End image ###
}
