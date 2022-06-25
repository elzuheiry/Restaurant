<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CartController as AdminCartController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\GeneralSettingsController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Users\UserController;
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
Route::get('menu', [Controller::class, 'menu'])->name('menu');

Route::group(['prefix' => 'cart'], function() {
    
    Route::get('/', [CartController::class, 'index'])->name('cart.index');

    Route::post('/store', [CartController::class, 'store'])->name('cart.store');

    Route::delete('{cart}/destroy', [CartController::class, 'destroy'])->name('cart.destroy');

});


Route::group(['prefix' => 'product'], function() {

    Route::get('/{food:slug}', [ProductController::class, 'show'])->name('product.show');

    Route::post('{food}/store', [ProductController::class, 'store'])->name('product.store');
        
});

Route::group(['prefix' => 'users'], function() {

    Route::get('/profile', [UserController::class, 'index'])->name('users.profile');
    Route::patch('{user}/update', [UserController::class, 'update'])->name('users.update');
    
});


Route::group(['prefix' => 'admins'], function() {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'products'], function() {

        Route::get('/', [FoodController::class, 'index'])->name('product.foods');
        // Route::get('get-data', [FoodController::class, 'getFood'])->name('product.data');
        
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

    Route::group(['prefix' => 'orders'], function() {

        Route::get('/', [OrderController::class, 'index'])->name('order.index');
        Route::patch('{order}/edit', [OrderController::class, 'edit'])->name('order.edit');

    });

    Route::group(['prefix' => 'carts'], function() {

        Route::get('/', [AdminCartController::class, 'index'])->name('admin.cart.index');
        Route::patch('{cart}/edit', [AdminCartController::class, 'edit'])->name('admin.cart.edit');

    });

    Route::group(['prefix' => 'general-settings'], function() {

        Route::get('/', [GeneralSettingsController::class, 'show'])->name('setting.index');
        Route::get('edit', [GeneralSettingsController::class, 'edit'])->name('setting.edit');
        Route::patch('update', [GeneralSettingsController::class, 'update'])->name('setting.update');

    });
    
});