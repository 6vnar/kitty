<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart = [];

    protected $listeners = ['addToCart'];

    public function addToCart($productId)
    {
        $this->cart[] = $productId;
    }
    public function render()
    {
        return view('livewire.pages.product.shopping-cart');
    }
}
