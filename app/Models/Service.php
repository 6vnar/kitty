<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'subject',
        'comment',
        'image_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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



