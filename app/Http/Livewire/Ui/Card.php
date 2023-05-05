<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Product;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Card extends Component
{
    public $product, $product_id;
    public $isFavorite = false;


    protected $listeners = ['productAddedToFavorites' ,'addToFavorites', 'favouriteUpdated' , '$refresh'];


    public function addToFavorites()
{

    $favorite = Favorite::where('product_id', $this->product->id)
        ->where('user_id', Auth::user()->id)
        ->first();
    if ($favorite) {
        $favorite->delete();
        $this->isFavorite = false;
    } else {
        $favorite = Favorite::create([
            'user_id' => Auth::user()->id,
            'product_id' => $this->product->id
            
        ]);
        $this->isFavorite = true;
    }
    // add product to favorites_product table
    $favorite->products()->attach($this->product->id);
    $this->emitUp('$refresh');
}

public function favouriteUpdated()
{
    $this->isFavorite = Favorite::where('product_id', $this->product->id)
        ->where('user_id', Auth::user()->id)
        ->exists();

    $this->emit('favouriteUpdated');
}


// public function updateFavorites()
// {
//     $this->isFavorite = Favorite::where('product_id', $this->product->id)
//         ->where('user_id', Auth::user()->id)
//         ->exists();

//     $this->emit('favouriteUpdated');
// }

    // $this->product_id = Product::find($this->product->id);
    // if ($this->product_id) {
    //     $favorite = Favorite::where('id', $this->product_id->id)
    //         ->where('user_id', Auth::user()->id)
    //         ->first();
    //     if ($favorite) {
    //         $favorite->delete();
    //         $this->isFavorite = false;
    //     } else {
    //         $favorite = Favorite::create([
    //             'user_id' => Auth::user()->id,
    //             'product_id' => $this->product_id->id
    //         ]);
    //         $this->isFavorite = true;
    //     }
    //     // add product to favorites_product table
    //     $favorite->products()->attach($this->product_id->id);
    //     $this->emit('favouriteUpdated');
    // }



    public function rander()
    {
        return view('livewire.ui.card');
    }
}
