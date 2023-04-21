<?php

namespace App\Http\Livewire\Pages\Admin\Category;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Category;


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
        $category = new Category();
        $category->add($data);

        // if ($this->image_path) {
        //     $category->add_image($this->image_path);
        // }

        $this->reset();

        $this->alert('success',  __('ui.successcategory'), [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function render()
    {
        return view('livewire.pages.admin.category.add');
    }
}
