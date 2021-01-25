<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories', 'Api\CategoryController@index');
Route::get('listcategory', 'Api\CategoryController@listcategory');
Route::get('products', 'Api\ProductController@index');
Route::get('manufacturers', 'Api\ManufacturerController@index');
Route::get('prices', 'Api\PriceController@index');