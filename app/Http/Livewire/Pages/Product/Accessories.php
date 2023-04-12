<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;

class Accessories extends Component
{
    public $accessories;
    public function mount()
    {
        $this->accessories = Product::where('category_id', 3)->get();
    }
    public function render()
    {
        return view('livewire.pages.product.accessories', [
            'accessories' => $this->accessories
        ]);
    }
}
