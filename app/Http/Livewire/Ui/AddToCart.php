<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;

class AddToCart extends Component
{
    protected $listeners = ['cartUpdated'];





    public function render()
    {
        $carts = Cart::with('products')->get();
        
        return view('livewire.ui.add-to-cart', compact('carts'));
    }
}
