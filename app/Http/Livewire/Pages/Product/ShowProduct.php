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


    //add to cart function 
    public function addToCart()
    {
        $cart = Cart::where('product_id', $this->product_id->id)
            ->where('user_id', Auth::user()->id)
            ->first();
        if ($cart) {
            $this->alert('error', 'Product already added to cart!', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
            ]);
        } else {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $this->product_id->id;
            $cart->quantity = 1;
            $cart->price = $this->product_id->price;
            $cart->total_price = $this->product_id->price;
            $cart->save();
    
            // add product to cart_product table
            $cart->products()->attach($this->product_id->id);

            $this->alert('success', 'Product added to cart successfully!', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
        $this->emitUp('$refresh');
        return redirect()->to('/product/' . $this->product_id->id);
    }
    

    public function confirmAdd($id)
    {
        //if user is not logged in redirect to login page
        if (!Auth::check()) {
            $this->alert('error', 'Please login to add product to cart!', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
            ]);
            return redirect()->to('/login');
        }
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
