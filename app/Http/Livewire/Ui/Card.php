<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Product;

class Card extends Component
{
    public $product;

    public function rander()
    {
        return view('livewire.ui.card');
    }
}
