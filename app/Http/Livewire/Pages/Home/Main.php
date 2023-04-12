<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;
use App\Models\Product;

class Main extends Component
{
   
    public function render()
    {
        $products = Product::all();
        return view('livewire.pages.home.main',[

            'products' => $products,
        ]);
    }

    
}
