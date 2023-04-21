<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Livewire\Pages\{
    Home\Main as Home,
    Product\Main as Product,
    Brand\Main as Brand,
    Category\Main as Category,
};
use App\Http\Livewire\Pages\Product\{
    ShowProduct as ShowProduct,
    Clothes as Clothes ,
    Shoes as Shoes,
    Accessories as Accessories,
    Makeup as Makeup,
    Favourite as Favourite,
};

use App\Http\Livewire\Pages\Admin\{
    Category\Add as CategoryAdd,
    Category\Edit as CategoryEdit,
    Brand\Add as BrandAdd,
    Brand\Edit as BrandEdit,
    Product\Add as ProductAdd,
    Product\Edit as ProductEdit,
};


use App\Http\Livewire\Ui\AddToCart as CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('change-language/{locale}', [MainController::class, 'changeLanguage'])->name('change_locale');


Route::get('/', Home::class)->name('home');
// product group
Route::get('/product', Product::class)->name('product');
Route::get('/product/{id}', ShowProduct::class)->name('show_product');
Route::get('/add-to-cart', CartController::class)->name('cart.add');
Route::get('/clothes', Clothes::class)->name('clothes');
Route::get('/shoes', Shoes::class)->name('shoes');
Route::get('/accessories', Accessories::class)->name('accessories');
Route::get('/makeup', Makeup::class)->name('makeup');
Route::get('/favourite', Favourite::class)->name('favourite');
// brand group
Route::get('/brand', Brand::class)->name('brand');
Route::get('/brand/add', BrandAdd::class)->name('brand.add');

// category group
Route::get('/category', Category::class)->name('category');
Route::get('/category/add', CategoryAdd::class)->name('category.add');

// product group

Route::get('/product/add', ProductAdd::class)->name('product.add');



