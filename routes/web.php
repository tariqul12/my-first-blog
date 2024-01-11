<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContrller;
use App\Http\Controllers\BlogController;
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
Route::get('/detail/{id}',[HomeContrller::class,"detail"])->name('detail');
Route::post('make-full-name',[HomeContrller::class,"makeFullName"])->name('make-full-name');
Route::get('/series',[HomeContrller::class,'series'])->name("series");
Route::post('make_series',[HomeContrller::class,"makeSeries"])->name('make_series');

Route::get('/add-blog',[BlogController::class,'index'])->name('blog.add');
Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('blog.new');
Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('blog.manage');
Route::get('/edit-blog/{id}',[BlogController::class,'editBlog'])->name('blog.edit');
Route::post('/update-blog',[BlogController::class,'updateBlog'])->name('blog.update');
Route::post('/delete-blog',[BlogController::class,'deleteBlog'])->name('blog.delete');
