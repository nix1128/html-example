<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('/products/{product}', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
