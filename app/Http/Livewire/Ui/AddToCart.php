<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;

class AddToCart extends Component
{
    public function addToCart(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price)
            ->associate('App\Models\Product');

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function render()
    {
        return view('livewire.ui.add-to-cart');
    }
}
