<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Livewire\Pages\{
    Home\Main as Home,
    Product\Main as Product,
    Product\ShowProduct,
};
//path to AddToCart
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
// prodect main
Route::get('/product', Product::class)->name('product');
// show product
Route::get('/product/{id}', ShowProduct::class)->name('show_product');
Route::get('/add-to-cart', CartController::class)->name('cart.add');


// Route::post('/register', [MainController::class, 'register'])->name('register');
// Route::post('/login', [MainController::class, 'login'])->name('login');
// Route::get('/logout', [MainController::class, 'logout'])->name('logout');

