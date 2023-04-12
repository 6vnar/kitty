<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;

class Clothes extends Component
{

    public $clothes;

    public function mount()
    {
        $this->clothes = Product::where('category_id', 1)->get();
    }
    public function render()
    {
        return view('livewire.pages.product.clothes'
        , [
            'clothes' => $this->clothes
        ]);
    }
}
