<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddToCart extends Component
{
    use LivewireAlert;
    protected $listeners = ['cartUpdated','removeFromCart','confirmDelete','refresh'];
    public $cart, $cart_id;

    //remove from cart function
    public function removeFromCart()
    {
        $cart = Cart::where('id', $this->cart_id->id)
            ->where('user_id', Auth::user()->id)
            ->first();
        
        if ($cart) {
            // remove cart from carts table
            $cart->delete();
            
            // remove product from cart_product table
            $cart->products()->detach($this->cart_id->id);
            
            $this->alert('success', 'Product removed from cart successfully!', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
            ]);
            $this->emitUp('$refresh');
        }
        
        return redirect()->to('/add-to-cart');
    }
    

    public function confirmDelete($id)
    {
        $this->cart_id = Cart::find($id);
        $this->confirm('Are you sure you want to delete this product?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => "Cancel",
            'onConfirmed' => 'removeFromCart',
            'onCancelled' => 'cancelled'
        ]);
    }

    
    public function render()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->with('products')->get();
        
        return view('livewire.ui.add-to-cart', compact('carts'));
    }
}
