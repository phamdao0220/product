<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout.home');
});
Route::prefix('admin')->group(function (){
Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('list.product');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
