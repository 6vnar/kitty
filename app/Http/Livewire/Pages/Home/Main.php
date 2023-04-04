<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;
use App\Models\Product;

class Main extends Component
{
    public function render()
    {
        
        $products = Product::where('is_on_sale', true)->limit(6)->get();
        return view('livewire.pages.home.main', compact('products'));
    }

    
}
