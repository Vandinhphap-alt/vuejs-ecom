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
//Route::view('/{any}', 'home')
//    ->where('any', '.*');
Route::get('admin',function (){
    return view('admin.layouts.app');
});
Route::prefix('product')->group( function () {
    Route::name('product.')->group( function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
        Route::put('/update/{id}', 'ProductController@update')->name('update');
        Route::get('/delete/{id}', 'ProductController@destroy')->name('destroy');
        Route::get('/create', 'ProductController@create')->name('create');
        Route::post('/create', 'ProductController@store')->name('store');

    });
});

Route::prefix('category')->group( function () {
    Route::name('category.')->group( function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
        Route::put('/update/{id}', 'CategoryController@update')->name('update');
        Route::get('/delete/{id}', 'CategoryController@destroy')->name('destroy');
        Route::post('/create', 'CategoryController@store')->name('store');
        Route::get('/create', 'CategoryController@create')->name('create');
    });
});
Route::prefix('manufacturers')->group( function () {
    Route::name('manufacturers.')->group( function () {
        Route::get('/', 'ManufacturersController@index')->name('index');
        Route::get('/edit/{id}', 'ManufacturersController@edit')->name('edit');
        Route::put('/update/{id}', 'ManufacturersController@update')->name('update');
        Route::get('/delete/{id}', 'ManufacturersController@destroy')->name('destroy');
        Route::post('/create', 'ManufacturersController@store')->name('store');
        Route::get('/create', 'ManufacturersController@create')->name('create');
    });
});
