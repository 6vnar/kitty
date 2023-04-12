<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;

class ShowProduct extends Component
{

    public $product;

    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.pages.product.show-product');
    }
}
