<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContrller;
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

Route::get('/',[HomeContrller::class,"index"])->name("home");
Route::get('/about',[HomeContrller::class,"about"])->name("about");
Route::get('/contact',[HomeContrller::class,'contact'])->name('contact');
