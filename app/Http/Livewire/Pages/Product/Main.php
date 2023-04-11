<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;

class Main extends Component
{
    public $products;
    public function render()
    {
        //get proudect with brand name
        $this->products = Product::with('brand')->get();
        return view('livewire.pages.product.main' );
    }
}
