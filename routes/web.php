<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('/products/{id?}', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');


