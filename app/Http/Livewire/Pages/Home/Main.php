<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;
use App\Models\Product;

class Main extends Component
{

    public $recentlyAdded;
    public $mostSold;

    public function mount()
    {
        $this->recentlyAdded = Product::orderBy('created_at', 'desc')->take(5)->get();
        $this->mostSold = Product::orderBy('is_on_sale', 'desc')->take(5)->get();
    }

    public function render()
    {
        return view('livewire.pages.home.main', [
            'recentlyAdded' => $this->recentlyAdded,
            'mostSold' => $this->mostSold
        ]);
    }
}
