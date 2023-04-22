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
    public function add()
    {
        $this->alert('info', 'لأضافة مدير للموقع قم بترقيته من صفحة المتبرعين', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function render()
    {
        // $this->admins = User::where('is_admin', true)->get();
        $this->admins = User::all();
        // dd($this->admins->toArray());
        //dd($this->admins->append('get_shares')->toArray());
        //dd($this->admins->toArray());
        return view('livewire.pages.admin.super.main');
    }
}
