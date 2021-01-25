<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/{any}', 'home')
    ->where('any', '.*');

Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/checkout/stripe', 'CheckoutController@stripe')->name('stripe');
