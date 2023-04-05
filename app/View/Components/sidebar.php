<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class sidebar extends Component
{
    public $tabs;
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
                    new TabItem('Home', 'fa-solid fa-home', 'home'),
                    new TabItem('clothes', 'fa-solid fa-shirt', 'home'),
                    new TabItem('makeup', 'fa-solid fa-eye','home'),
                    new TabItem('accessories ', 'fa-solid fa-venus-mars', 'home'),
                    new TabItem('shoes', 'fa-solid fa-home', 'home'),
                    new TabItem('Favourites', 'fa-solid fa-heart', 'home', true),

                ]
            ),
            new Tab(
                __('ui.Managements'),
                [
                    new TabItem('Add product', 'fa-solid fa-circle-plus', 'home', true),
                    new TabItem('Add category', 'fa-solid fa-circle-plus','home', true),
                    new TabItem('Add brand', 'fa-solid fa-circle-plus','home', true),
                ],
                true
            ),
            new Tab(
                __('ui.Settings'),
                [
                    new TabItem('Sign in', 'fa-solid fa-right-to-bracket', 'login', false),
                    new TabItem('Sign up', 'fa-solid fa-user-plus', 'register', false),
                    new TabItem('Sign out', 'fa-solid fa-user-minus', 'logout', true),
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


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
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
