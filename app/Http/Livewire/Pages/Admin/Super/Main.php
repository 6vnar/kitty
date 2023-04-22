<?php

namespace App\Http\Livewire\Pages\Admin\Super;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Main extends Component
{
    public $admins ;
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    
    public function render()
    {
        // is admin and id is not 1 
        $this->admins = User::where('is_admin', true)->where('id', '!=', 1)->get();
        return view('livewire.pages.admin.super.main');
    }
}
