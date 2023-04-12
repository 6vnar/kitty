<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;

class Shoes extends Component
{
    public $shoes;
    public function mount()
    {
        $this->shoes = Product::where('category_id', 2)->get();
    }

    public function render()
    {
        return view('livewire.pages.product.shoes', [
            'shoes' => $this->shoes
        ]);
    }
}
