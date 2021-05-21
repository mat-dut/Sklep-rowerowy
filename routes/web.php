<?php

use App\Http\Controllers\ElementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
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

Route::get('/', [ElementController::class, 'index'])->name('main');

Auth::routes();



// ADMIN FUNCTIONS
Route::get('admin', [AdminController::class, 'index'])->middleware(VerifyIfAdmin::class)->name('admin');

Route::get('elements_table', [AdminController::class, 'elements_table'])->middleware(VerifyIfAdmin::class)->name('elements_table');

Route::get('edit_form/{element_id}', [AdminController::class, 'edit'])->middleware(VerifyIfAdmin::class)->name('edit');
Route::post('update_element', [AdminController::class, 'update'])->middleware(VerifyIfAdmin::class)->name('update_element');

Route::get('create_product', [ProductController::class, 'create_product'])->middleware(VerifyIfAdmin::class)->name('create_product');
Route::get('products_table', [ProductController::class, 'products_table'])->middleware(VerifyIfAdmin::class)->name('products_table');
Route::post('products_table', [ProductController::class, 'products_table'])->middleware(VerifyIfAdmin::class);
Route::post('create_product', [ProductController::class, 'create'])->middleware(VerifyIfAdmin::class);
Route::get('edit_product/{product_id}', [ProductController::class, 'edit'])->middleware(VerifyIfAdmin::class)->name('edit_product');
Route::post('update_product', [ProductController::class, 'update'])->middleware(VerifyIfAdmin::class)->name('update_product');
Route::get('remove_product/{product_id}', [ProductController::class, 'remove'])->middleware(VerifyIfAdmin::class)->name('remove_product');

// END OF ADMIN FUNCTIONS

Route::get('products', [ProductController::class, 'index'])->name('products');
Route::post('products', [ProductController::class, 'index'])->name('products');
Route::get('product/{product_id}', [ProductController::class, 'show'])->name('product');
Route::get('products/{category}', [ProductController::class, 'index']);

//Pinging
Route::get('/ping', function(){
    return response('OK', 200);
});

Route::get('/test/{test}', function($test){
    return $test;
});