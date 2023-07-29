<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site2Controller;


Route::prefix('site2')->group(function(){
    Route::get('/',[Site2Controller::class,'index'])->name('site2home');
    Route::get('/about',[Site2Controller::class,'about'])->name('site2about');
    Route::get('/post/{title}',[Site2Controller::class,'post'])->name('site2post');
    Route::get('/contact',[Site2Controller::class,'contact'])->name('site2contact');
});


