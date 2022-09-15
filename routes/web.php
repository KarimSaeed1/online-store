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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/front',App\Http\Controllers\frontController::class);
Route::get('/contact',function(){
   return view('front.contact');
});
Route::get('/cart',[App\Http\Controllers\cartController::class,'index']);
Route::get('/cart/addItem/{id}',[App\Http\Controllers\cartController::class,'addItems']);


Route::resource('admin',App\Http\Controllers\adminController::class);
Route::resource('product',App\Http\Controllers\ProductController::class);
Route::resource('category',App\Http\Controllers\categoryController::class);


