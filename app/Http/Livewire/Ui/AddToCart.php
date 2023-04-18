<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;

class AddToCart extends Component
{
    protected $listeners = ['cartUpdated'];


    public $cartItems = [];

    public function mount()
    {
        //get cart items
        $this->cartItems = Cart::with('product')->get();
        // dd($this->cartItems);
    }



    public function render()
    {
        return view('livewire.ui.add-to-cart');
    }
}
