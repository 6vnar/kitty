<?php

namespace App\Http\Livewire\Pages\Service;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Service;

class Main extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $user_id ,$subject, $comment, $image_path ,$name ,$email ,$phone_number;

    protected $rules = [
        'subject' => 'required',
        'comment' => 'required',
    ];
    // mount user info 
    public function mount()
    {
        $this->user_id = auth()->user()->id;
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->phone_number = auth()->user()->phone_number;
    }

     public function add()
    {
        $this->validate();

        $data = [
            'user_id' => auth()->user()->id,

            'subject' => $this->subject,
            'comment' => $this->comment,
        ];
        $service = new Service();
        $service->add($data);

        if ($this->image_path) {
            $service->add_image($this->image_path);
        }

        $this->reset();

        $this->alert('success',  __('ui.successservice'), [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
   
    public function render()
    {
        return view('livewire.pages.service.main');
    }
}
