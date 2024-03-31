<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\FoodController;

use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();    
});




Route::apiResource('users', UserController::class);
Route::apiResource('product', FoodController::class);
Route::apiResource('order', OrderController::class);
Route::get('/product/{imageName}/image', [FoodController::class, 'getImage']);
Route::post('/users/login', [UserController::class, 'login']);
Route::post('/users/reset', [UserController::class, 'sendPasswordResetLink']);
Route::post('/users/check-email', [UserController::class, 'checkEmailAvailability']);