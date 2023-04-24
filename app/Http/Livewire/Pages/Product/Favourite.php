<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Favourite as FavouriteModel;

class Favourite extends Component
{

    protected $listeners = ['favouriteUpdated' => '$refresh'];
    public $favourites;

    public function render()
    {
        $favorites = auth()->user()->favorites;
        return view('livewire.pages.product.favourite',
        [
            'favourites' => $this->favourites
        ]);
    }
}
