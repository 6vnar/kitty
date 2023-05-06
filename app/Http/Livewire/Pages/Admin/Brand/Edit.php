<?php

namespace App\Http\Livewire\Pages\Admin\Brand;

use Livewire\Component;
use App\Models\Brand;

class Edit extends Component
{
    public $brands;
    public function render()
    {
        $this->brands = Brand::all();
        return view('livewire.pages.admin.brand.edit');
    }
}
