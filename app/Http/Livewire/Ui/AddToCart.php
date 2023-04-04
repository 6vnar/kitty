<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Product;

class AddToCart extends Component
{

    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function addToCart()
    {
        // Code to add product to cart
        // Cart::add([
        //     'id' => $this->product->id,
        //     'name' => $this->product->title,
        //     'price' => $this->product->sale_price ? $this->product->sale_price : $this->product->price,
        //     'qty' => 1
        // ]);
        session()->flash('success', 'Product added to cart!');
        return redirect()->route('home');
    }
    
    public function render()
    {
        return view('livewire.ui.add-to-cart');
    }
}
