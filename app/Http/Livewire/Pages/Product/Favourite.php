<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Favorite as FavouriteModel;

class Favourite extends Component
{

    protected $listeners = ['favouriteUpdated' , '$favouriteUpdated', 'productAddedToFavorites' , 'addToFavorites','updateFavorites'];
    public $favorites;

    public function mount()
    {
        $this->favorites = FavouriteModel::where('user_id', auth()->id())->with('products')->get();
    }

    public function render()
    {
        return view('livewire.pages.product.favourite'  );
    }
}
