<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagController;
use App\Models\Product;

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


require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/semlogin', function(){
    return view('deslogado');
})->middleware(['guest'])->name('dashboard');

Route::group(['middleware' => 'isAdmin'], function(){
    Route::resource('/product',ProductsController::class, ['except' => ['show']]);
    Route::get('/trash/product', [ProductsController::class, 'trash'])->name('product.trash');
    Route::patch('/product/restore/{Product}', [ProductsController::class, 'restore'])->name('product.restore');
    Route::resource('/category',CategoriesController::class);
    Route::resource('/tag',TagController::class);
});

Route::resource('/product', ProductsController::class, ['only' => ['show']]);