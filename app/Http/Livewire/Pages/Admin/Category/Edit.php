<?php

namespace App\Http\Livewire\Pages\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Edit extends Component
{
    use LivewireAlert;
    public $category,  $category_id;
    protected $listeners = [ '$refresh','delete','confirmDelete'];
    public function delete()
    {
        Category::findOrFail($this->category_id)->delete();
        $this->alert('success', 'Product removed from cart successfully!', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('pages.admin.control.main', '$refresh');
        return redirect()->to('/control');

    }

    public function confirmDelete($id)
    {
        $this->category_id = $id;
        $this->confirm('Are you sure you want to delete this product?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => "Cancel",
            'onConfirmed' => 'delete',
            'onCancelled' => 'cancelled'
        ]);
        
    }

    public function render()
    {
        return view('livewire.pages.admin.category.edit');
    }
}
