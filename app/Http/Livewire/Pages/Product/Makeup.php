<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;

class Makeup extends Component
{
    public $makeup;
    public function mount()
    {
        $this->makeup = Product::where('category_id', 4)->get();
    }   

    public function render()
    {
        return view('livewire.pages.product.makeup', [
            'makeup' => $this->makeup
        ]);
    }
}
