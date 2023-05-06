<?php

namespace App\Http\Livewire\Pages\Admin\Control;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class Main extends Component
{
    public $tabs;

    public function __construct()
    {
        $this->tabs = [
            new Tab(
                __('ui.Menu'),
                [
                    new TabItem(__('ui.home'), 'brand.edit'),
                    new TabItem(__('ui.clothes'), 'category.edit'),
                    

                ]
            ),
            
        ];
        
        $this->tabs = collect($this->tabs);
        $this->tabs = $this->tabs->filter(function ($tab) {
            if ($tab->forAdmin) {
                if (auth()->user())
                    return auth()->user()->is_admin;
                else return false;
            }
            return true;
        })->toArray();
    }
    
    public function render()
    {
        return view('livewire.pages.admin.control.main');
    }
}

class Tab
{
    public $title;
    public $items;
    public $forAdmin;

    public function __construct($title, $items, $forAdmin = false)
    {
        $this->title = $title;
        $this->items = collect($items)->filter(function ($item) {
            if (isset($item->auth))
                return $item->auth == Auth::check();
            return true;
        })->all();
        $this->forAdmin = $forAdmin;
    }
}

class TabItem
{
    public $title;
    public $route;
    public $active;
    public $auth;

    public function __construct($title = 'Tab Item', $route = 'home', $auth = null)
    {
        $this->title = $title;
        $this->route = $route;
        $this->active = request()->routeIs($route . '*');
        $this->auth = $auth;
    }
}
