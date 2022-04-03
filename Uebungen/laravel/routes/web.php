<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'list']);
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);
Route::any('/Warenkorb/{id}', [\App\Http\Controllers\ProductController::class, 'Warenkorb']);
Route::get('/Warenkorb', [\App\Http\Controllers\ProductController::class, 'ShowWarenkorb']);

Route::post('/userlogin', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('/userregister', [\App\Http\Controllers\UserController::class, 'register']);
Route::get('/login', [\App\Http\Controllers\UserController::class, 'showLogin']);
Route::get('/register', [\App\Http\Controllers\UserController::class, 'showRegister']);
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'showLogout']);
