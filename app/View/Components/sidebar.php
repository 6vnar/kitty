<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
class sidebar extends Component
{
    public $tabs;
    public $admins;
    public $category;
    public $langs;
    public $category_id;

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

        $this->category = Category::all();
            
        $this->admins = [
            new Tab(
                __('ui.Managements'),
                [
                    new TabItem(__('ui.Add Brand') ,'fa-solid fa-circle-plus','brand.add'),
                    new TabItem(__('ui.Add category'), 'fa-solid fa-circle-plus','category.add'),
                    new TabItem(__('ui.Add category'), 'fa-solid fa-circle-plus', 'product.add'),
                    new TabItem(__('ui.controlbc'), 'fa-solid fa-circle-plus', 'control'),
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
