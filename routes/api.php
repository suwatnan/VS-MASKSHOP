<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('idols', 'API\IdolController@index');
Route::get('idols/{id}', 'API\IdolController@index');

Route::get('products/{id}', 'API\ProductControllers@view');
Route::get('cartproducts/{id}', 'API\ProductControllers@viewtotalcart');

Route::post('user/login', 'API\UserController@login');
Route::post('user', 'API\UserController@create');
Route::get('user/{id}', 'API\UserController@view');
Route::put('user/{id}', 'API\UserController@update');
Route::delete('user/{id}', 'API\UserController@delete');
Route::post('user/{id}', 'API\UserController@update');//fake update

Route::post('OrderDetail', 'API\OrderDetailsController@index');

Route::get('SelectIDOrder', 'API\OrderController@SelectIDOrder');
Route::put('orderupdate/{id}', 'API\OrderController@update');
Route::get('product', 'API\ProductController@index');
Route::post('product', 'API\ProductController@create');
Route::post('order', 'API\OrderController@create');

Route::get('order/{id}', 'API\OrderController@order');
Route::get('orderviiiiiii/{id}', 'API\OrderController@orderviiiiiii');
Route::delete('order/{id}', 'API\OrderController@delete');

Route::get('report/monthlySale', 'API\ReportController@monthlySale');
Route::get('report/topFiveProduct', 'API\ReportController@topFiveProduct');


Route::get('basket/{id}', 'API\BasketController@index');
Route::post('addbasket', 'API\BasketController@create');
Route::delete('basket/{id}', 'API\BasketController@delete');
Route::delete('basketall/{id}', 'API\BasketController@deleteall');


Route::post('addorder', 'API\OrderController@index');
Route::post('addorderna/{id}', 'API\OrderController@create');
Route::post('AddOrderDetail', 'API\OrderDetailController@AddOrderDetail');
Route::post('AddPayment', 'API\PaymentController@AddPayment');
Route::put('updatestok/{id}', 'API\ProductController@updatestok');

Route::put('updatestatus/{id}', 'API\OrderController@updatestatus');
Route::post('updatestatus/{id}', 'API\OrderController@updatestatus');
Route::get('viewpayment', 'API\PaymentController@viewpayment');
Route::delete('payment/{id}', 'API\PaymentController@delete');
