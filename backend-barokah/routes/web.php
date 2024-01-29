<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/carts', \App\Http\Controllers\CartController::class);
Route::resource('/payments', \App\Http\Controllers\PaymentController::class);
Route::resource('/adress', \App\Http\Controllers\AdressController::class);