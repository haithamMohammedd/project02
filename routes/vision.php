<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/user',function () {
//     $name ='haitham';
//     $link = route('userpage',[$name]);
//     return "<a href='$link'>users-name</a>";
// });

// Route::get('user/{name?}', function ($name =null) {
//     return "Welcome $name";
// })->name('userpage');


Route::prefix('admin')->name('admin.')->group(function() {

    Route::get('/', [AdminController::class,'index'])->name('home');

    Route::get('/about',[AdminController::class ,'about'])->name('about');

    Route::get('/contact', [AdminController::class ,'contact'])->name('contact');

});


Route::get('/home/{name?}/{age?}',[HomeController::class,'home'])->name('home');

Route::get('/color/{color}',[HomeController::class,'color'])->name('color');



