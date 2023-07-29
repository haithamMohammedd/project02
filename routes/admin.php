<?php

use Illuminate\Support\Facades\Route;



Route::prefix('admin')->group(function(){
    Route::get('/posts',function(){
        return 'admin';
    });
    Route::get('/users',function(){
        return 'admin';
    });
    Route::get('/about',function(){
        return 'admin';
    });
    Route::get('/articels',function(){
        return 'admin';
    });
});
