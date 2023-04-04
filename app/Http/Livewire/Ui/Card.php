<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;


class Card extends Component
{
    // public $title;
    // public $subtitle;
    // public $image;
    // public $price;
    // public $discount, $discountedPrice;
    // public $rating;
    // public $type;

    // public function mount($title, $subtitle, $image, $price, $discount, $rating, $type)
    // {
    //     $this->title = $title;
    //     $this->subtitle = $subtitle;
    //     $this->image = $image;
    //     $this->price = $price;
    //     $this->discount = $discount;
    //     $this->discountedPrice = $price - ($price * $discount / 100);
    //     $this->rating = $rating;
    //     $this->type = $type;
    // }



    public function rander()
    {
        return view('livewire.ui.card');
    }
}
