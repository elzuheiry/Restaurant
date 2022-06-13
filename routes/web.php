<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('product', [Controller::class, 'show'])->name('product.show');
Route::get('cart', [CartController::class, 'index'])->name('cart.index');


Route::group(['prefix' => 'admin'], function() {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'products'], function() {

        Route::get('/', [FoodController::class, 'index'])->name('product.foods');
        
        Route::get('create', [FoodController::class, 'create'])->name('product.create');
        Route::post('create', [FoodController::class, 'store']);

        Route::get('{food:slug}/edit', [FoodController::class, 'edit'])->name('product.edit');
        Route::patch('{food:slug}/update', [FoodController::class, 'update'])->name('product.update');
        
        Route::delete('{food:slug}/destroy', [FoodController::class, 'destroy'])->name('product.destroy');

    });

    Route::group(['prefix' => 'types-foods'], function() {

        Route::get('/', [TypeController::class, 'index'])->name('type.index');

        Route::get('create', [TypeController::class, 'create'])->name('type.create');
        Route::post('create', [TypeController::class, 'store']);

        Route::get('{type:slug}/edit', [TypeController::class, 'edit'])->name('type.edit');
        Route::patch('{type:slug}/update', [TypeController::class, 'update'])->name('type.update');

        Route::delete('{type:slug}/destroy', [TypeController::class, 'destroy'])->name('type.destroy');

    });
    
});