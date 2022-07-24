<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

  Route::get('/',function(){
        return view('Home');
    });
 
  //user Information Start

  Route::get('/user/information',function(){
        return view('information');
    })->name('information');

 Route::post('/user/information','TestController@input')->name('TestController_input')->middleware('password.confirm');

 Route::post('/user/information/update','TestController@update')->middleware('auth')->name('TestController_update');

 Route::get('/user/about','TestController@Userinformation_list')->middleware('auth')->name('Userinformation_list');

 Route::get('/user/about/{user_id}','TestController@single_read')->middleware('auth')->name('single_read');

 Route::get('/user/about/delete/{user_id}','TestController@delete')->middleware('auth')->name('userDelete');

// user information end


//food product start
 Route::get('/foodview','FoodController@foodview')->middleware('auth')->name('foodview');

 Route::get('/food/data','FoodController@foodData')->middleware('auth')->name('foodData');

 Route::post('/food/data','FoodController@foodInput')->middleware('auth')->name('foodInput');

 Route::get('/foodview/Foodread/{product_id}','FoodController@Foodread')->middleware('auth')->name('Food_read');

 Route::post('/food/data/update','FoodController@update')->middleware('auth')->name('item_update');

 Route::get('/food/data/delete/{product_id}','FoodController@delete')->middleware('auth')->name('itemDelete');


 //End food 

 Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 