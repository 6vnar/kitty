<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;

class AddToCart extends Component
{
    protected $listeners = ['cartUpdated'];


    public function render()
    {
        return view('livewire.ui.add-to-cart');
    }
}
