<?php

use App\Http\Controllers\ElementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\VerifyIfAdmin;

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

Auth::routes();



// FUNKCJE ADMINISTRATORA
Route::get('admin', [AdminController::class, 'index'])->middleware(VerifyIfAdmin::class)->name('admin');
Route::get('create_product', [ProductController::class, 'create_product'])->middleware(VerifyIfAdmin::class)->name('create_product');
Route::get('products_table', [ProductController::class, 'products_table'])->middleware(VerifyIfAdmin::class)->name('products_table');
Route::post('products_table', [ProductController::class, 'products_table'])->middleware(VerifyIfAdmin::class);
Route::post('create_product', [ProductController::class, 'create'])->middleware(VerifyIfAdmin::class);
Route::get('edit_product/{product_id}', [ProductController::class, 'edit'])->middleware(VerifyIfAdmin::class)->name('edit_product');
Route::post('update_product', [ProductController::class, 'update'])->middleware(VerifyIfAdmin::class)->name('update_product');
Route::get('remove_product/{product_id}', [ProductController::class, 'remove'])->middleware(VerifyIfAdmin::class)->name('remove_product');

// KONIEC FUNKCJI ADMINISTRATORA

Route::get('/', [ProductController::class, 'index'])->name('main');
Route::post('/', [ProductController::class, 'index']);
Route::get('product/{product_id}', [ProductController::class, 'show'])->name('product');

//NAVBAR
Route::get('/onas', [NavbarController::class, 'about'])->name('about');
Route::get('/kontakt', [NavbarController::class, 'contact'])->name('contact');

//FUNKCJE KOSZYKA
Route::get('add_to_cart/{product_id}', [CartController::class, 'add'])->name('add_to_cart');
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('destroy', [CartController::class, 'destroy']);
Route::get('remove_from_cart/{product_id}', [CartController::class, 'remove']);
//KONIEC FUNKCJI KOSZYKA

//Pinging
Route::get('/ping', function(){
    return response('OK', 200);
});

Route::get('/test', function(){
    return session('cart');
});