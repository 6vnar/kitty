<?php

namespace App\Http\Livewire\Pages\Brand\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Brand;


class Add extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $name, $description, $image;

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    public function add()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'description' => $this->description,
        ];
        $brand = new Brand();
        $brand->add($data);

        // if ($this->image_path) {
        //     $brand->add_image($this->image_path);
        // }

        $this->reset();

        $this->alert('success',  __('ui.successbrand'), [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function render()
    {
        return view('livewire.pages.brand.admin.add');
    }
}
