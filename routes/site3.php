<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site3Controller;

Route::prefix('site3')->group(function(){
    Route::get('/',[Site3Controller::class,'index'])->name('site3home');
    Route::get('/resume',[Site3Controller::class,'resume'])->name('site3resume');
    Route::get('/projects',[Site3Controller::class,'projects'])->name('site3projects');
    Route::get('/contact',[Site3Controller::class,'contact'])->name('site3contact');
});
