<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

route::get('/', [HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('addToCart/{product}', [HomeController::class,'addToCart'])->name('addToCart');


});

route::get('/redirect', [HomeController::class,'redirect']);

route::post('/add_order/{id}',[HomeController::class,'add_order']);

route::get('/producthome', [HomeController::class,'producthome']);


route::get('/view_product', [AdminController::class,'view_product']);

route::post('/add_product', [AdminController::class,'add_product']);

route::get('/show_product', [AdminController::class,'show_product']);

route::get('/delete_product/{id}', [AdminController::class,'delete_product']);

route::get('/update_product/{id}', [AdminController::class,'update_product']);

route::post('/update_product_confirm/{id}', [AdminController::class,'update_product_confirm']);

route::get('/product_details/{id}',[HomeController::class,'product_details']);

route::get('/order',[HomeController::class,'order']);



route::get('/show_orders',[AdminController::class,'show_orders']);

route::get('/approve_order/{id}',[AdminController::class,'approve_order']);





