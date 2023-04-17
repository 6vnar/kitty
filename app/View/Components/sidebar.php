<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class sidebar extends Component
{
    public $tabs;
    public $admins;

    public $langs;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->langs = [
            'en' => 'English',
            'ar' => 'عربي',
        ];
        $this->tabs = [
            new Tab(
                __('ui.Menu'),
                [
                    new TabItem(__('ui.home'), 'fa-solid fa-home', 'home'),
                    new TabItem(__('ui.clothes'), 'fa-solid fa-shirt', 'clothes'),
                    new TabItem(__('ui.makeup'), 'fa-solid fa-eye','makeup'),
                    new TabItem(__('ui.accessories'), 'fa-solid fa-venus-mars', 'accessories'),
                    new TabItem(__('ui.shoes'), 'fa-solid fa-home', 'shoes'),
                    new TabItem(__('ui.Favourites'), 'fa-solid fa-heart', 'favourite'),

                ]
            ),
            
        ];
        $this->admins = [
            new Tab(
                __('ui.Managements'),
                [
                    new TabItem(__('ui.Add product'), 'fa-solid fa-circle-plus', 'home', true),
                    new TabItem(__('ui.Add category'), 'fa-solid fa-circle-plus','home', true),
                    new TabItem(__('ui.Add brand') ,'fa-solid fa-circle-plus','brand.add', true),
                ],
                true
            ),
        ];
        
        
        $this->admins = collect($this->admins);
        $this->admins = $this->admins->filter(function ($admin) {
            if ($admin->forAdmin) {
                if (auth()->user())
                    return auth()->user()->is_admin;
                else return false;
            }
            return true;
        })->toArray();
    }
    public function render()
    {
        return view('components.sidebar');
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
    public $icon;
    public $route;
    public $active;
    public $auth;

    public function __construct($title = 'Tab Item', $icon = 'fa-solid fa-archway', $route = 'home', $auth = null)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->route = $route;
        $this->active = request()->routeIs($route . '*');
        $this->auth = $auth;
    }
}
