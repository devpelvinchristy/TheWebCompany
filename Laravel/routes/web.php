<?php

use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

/*Route::get('/', function () {
    return view('main');
});*/

Route::get('/', [App\Http\Controllers\UsersController::class, 'index'])->name('users.user');

Route::get('/Admin/products',[App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

Route::get('/create',[App\Http\Controllers\ProductController::class, 'create'])->name('product.create');

Route::post('/store',[App\Http\Controllers\ProductController::class, 'Store'])->name('product.store');

Route::get('/show/product/{id}',[App\Http\Controllers\ProductController::class, 'show']);

Route::get('/edit/product/{id}',[App\Http\Controllers\ProductController::class, 'Edit']); 

Route::get('/delete/product/{id}',[App\Http\Controllers\ProductController::class, 'Delete']); 

Route::get('/show/product/{id}',[App\Http\Controllers\ProductController::class, 'show']);

Route::post('/update/product/{id}',[App\Http\Controllers\ProductController::class, 'Update']); 

Route::view('products', 'front.products');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/ViewProducts/{maincategory}/{id}', 'UsersController@viewproducts');

Route::prefix('api')->group(function(){

    Route::get('getProducts',[App\Http\Controllers\ProductController::class, 'getProducts']);
});




