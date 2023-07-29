<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/news/{id}',function($id){
    return "Single News number : $id";
})->whereNumber('id');//لازم يكون رقم اجباري
Route::get('/news/{name}',function($name){
    return "Single News number : $name";
})->whereAlpha('name');//لازم يكون اسم


/*=========================================================
  ============         Option Name In Url      ============
 ==========================================================
*/


Route::get('users/{name?}', function ($name =null) {
    return "Welcome $name";
});


/*=========================================================
  ============         Route Grop              ============
 ==========================================================
*/






Route::get('contact-me',function(){
    return 'contact';
})->name('contact-page');



