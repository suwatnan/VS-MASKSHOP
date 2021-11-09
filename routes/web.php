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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('admin/product', 'Admin\ProductController');
Route::resource('admin/order', 'Admin\OrderController');
Route::resource('admin/orderdetail', 'Admin\OrderdetailController');
Route::resource('admin/payment', 'Admin\PaymentController');
Route::resource('admin/shipping', 'Admin\ShippingController');
Route::resource('admin/user', 'Admin\UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('admin/basket', 'Admin\BasketController');
Route::resource('admin/user', 'Admin\userController');