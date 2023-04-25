<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Favourite as FavouriteModel;

class Favourite extends Component
{

    protected $listeners = ['favouriteUpdated' => '$favouriteUpdated', 'productAddedToFavorites' => 'addToFavorites'];
    public $favorites;

    public function mount()
    {
        $this->favorites = auth()->user()->favorites ?? []; 
    }

    public function render()
    {

        return view('livewire.pages.product.favourite'
        , [
            'favorites' => $this->favorites
        ]);
    }
}
