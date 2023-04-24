<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class Card extends Component
{
    public $product;
    public $isFavorite = false;

    //fun addToFavorites
    public function addToFavorites()
    {
        $this->isFavorite = true;
        // Add item to user's favorites list
    
        session()->flash('success', 'Card added to favorites!');
            
    }
    public function rander()
    {
        return view('livewire.ui.card');
    }
}
