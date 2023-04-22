<?php

namespace App\Http\Livewire\Pages\Admin\Super;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use LivewireAlert;
    public $user = [];
    protected $listeners = ['$refresh'];
    protected $rules = [
        'user.name' => 'required',
        'user.email' => 'required|email|unique:users,email',
        'user.password' => 'required|min:6',
        'user.phone_number' => 'required',
    ];
    public function save()
    {
        $this->validate();
        $this->user['password'] = bcrypt($this->user['password']);
        $this->user['is_admin'] = true;

        $user = User::create($this->user);
        $this->reset();
        $this->emitTo('pages.admin.super.main', '$refresh');

        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '400',
        ]);
    }
    public function render()
    {
        return view('livewire.pages.admin.super.add');
    }
}
