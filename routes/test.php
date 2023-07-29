<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TestController;

Route::get('test',[TestController::class,'index']);
Route::get('about',[TestController::class,'about']);
Route::get('contact',[TestController::class,'contact']);


Route::get('/form1',[FormController::class],'form1');
Route::post('/fomr1',[FormController::class],'submitForm')->name('submit');
