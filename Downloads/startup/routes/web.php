<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/boutique','ProductController@index')->name('products.index');
Route::get('/boutique/{slug}', 'ProductController@show')->name('products.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/subscribe','SubscriptionController@index');
Route::post('/subscribe','SubscriptionController@index');


Route::get('/login','loginController@index');


Route::get('/forgot','forgotController@index');
Route::get('/client','client@index');
Route::get('/sub','checkoutController@index');