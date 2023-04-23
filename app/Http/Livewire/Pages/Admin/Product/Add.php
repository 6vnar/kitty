<?php

namespace App\Http\Livewire\Pages\Admin\Product;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Brand;

class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $name , $category_id ,$brand_id ,$description ,$quantity ,$price ,$discount ,$search ,$brands ;

    protected $rules = [
        'category_id' => 'required',
        'brand_id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'quantity' => 'required',
        'price' => 'required',
        'discount'=> 'required',
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function add (){
        $this->validate();
        $product = Product::create([
            'name' => $this->name,
            'description' => $this->price,
            'quantity' => $this->quantity,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'description' => $this->description,
            'discount' => $this->discount,
        ]);
        
        // if ($this->image_path)
        //     $student->add_image($this->image_path);

        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->reset();
    
    }
    public function render()
    {
        if ($this->search) {
            $search = '%' . $this->search . '%';
            $this->brands = Brand::where('name', 'LIKE', $search)->get();
        }
        return view('livewire.pages.admin.product.add');
    }
}
