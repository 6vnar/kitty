<?php

namespace App\Http\Livewire\Pages\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ShowProduct extends Component
{
    use LivewireAlert;
    protected $listeners = ['cartUpdated', 'addToCart', 'confirmAdd', 'refresh'];
    public $product, $product_id;


    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
    }


    //add to cart function use attach method to add product to cart for many to many relationship
    public function addToCart()
    {
        $cart = Cart::where('id', $this->product_id->id)
            // ->where('user_id', Auth::user()->id)
            ->first();
        if ($cart) {
            $cart->increment('quantity');
        } else {
            $cart = new Cart();
            // $cart->user_id = Auth::user()->id;
            $cart->id = $this->product_id->id;
           
           
            $cart->products()->attach($this->product_id->id);
            $cart->save();
        }
        $this->alert('success', 'Product added to cart successfully!', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        return redirect()->to('/product/' . $this->product_id->id);
    }
    // //add to cart function
    // public function addToCart()
    // {
    //     $cart = Cart::where('id', $this->product_id->id)
    //     // ->where('user_id', Auth::user()->id)
    //     ->first();
    //     if ($cart) {
    //         $cart->increment('quantity');
    //     } else {
    //         $cart = new Cart();
    //         // $cart->user_id = Auth::user()->id;
    //         $cart->id = $this->product_id->id;
    //         $cart->quantity = 1;
    //         $cart->price = $this->product_id->price;
    //         $cart->save();
    //     }
    //     $this->alert('success', 'Product added to cart successfully!', [
    //         'position' => 'top',
    //         'timer' => 3000,
    //         'toast' => true,
    //     ]);
    //     $this->emitUp('$refresh');
    //     return redirect()->to('/product/' . $this->product_id->id);
    // }
    public function confirmAdd($id)
    {
        $this->product_id = Product::find($id);
        $this->confirm('Are you sure you want to add this product to cart?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => "Cancel",
            'onConfirmed' => 'addToCart',
            'onCancelled' => 'cancelled'
        ]);
    }
    public function confirmDelete()
    {
        $this->alert('info', 'are you sure you want to delete this product?', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }


    //remove from cart function
    public function removeFromCart($id)
    {
        $cart = Cart::where('id', $id)
            // ->where('user_id', Auth::user()->id)
            ->first();
        if ($cart->quantity > 1) {
            $cart->decrement('quantity');
        } else {
            $cart->delete();
        }
        $this->alert('success', 'Product removed from cart successfully!', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        return redirect()->to('/product/' . $this->product_id->id);
    }
    //cart updated function
    public function cartUpdated()
    {
        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.pages.product.show-product');
    }
}
