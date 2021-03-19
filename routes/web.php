<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function (){
//    return view('home');
//});

Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('/about', function()
{
    return View::make('pages.contact');
});



