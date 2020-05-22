<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/search', 'HomeController@search')->name('home.search');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{shop}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::post('/cart', 'CartController@store')->name('cart.store')->middleware('auth');
Route::patch('/cart/{cart}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::delete('/cart/{cart}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store')->middleware('auth');

Route::get('/payment/{order_id}', 'PaymentController@show')->name('payment.show')->middleware('auth');
Route::patch('/payment/{order_id}', 'PaymentController@update')->name('payment.update')->middleware('auth');

Route::get('/account/profile', 'UserController@index')->name('user.index')->middleware('auth');
Route::patch('/account/profile/{user}', 'UserController@update')->name('user.update')->middleware('auth');
Route::get('/account/orders', 'OrderController@index')->name('order.index')->middleware('auth');
Route::get('/account/setting', 'UserController@setting')->name('user.setting')->middleware('auth');

//Admin
Route::get('/admin', function () {
    return view('admin/welcomeadmin');
})->name('openingadmin');

Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/loginPost', 'AdminController@loginPost');
Route::get('/admin/logout', 'AdminController@logout');

Route::get('/admin/home', 'AdminController@index')->name('home');

Route::get('/transaction', 'TransactionController@transaction');
Route::post('/save', 'TransactionController@save');

Route::get('/status', 'TransactionController@status');

Route::get('/uploadbukti', 'UploadController@upload');
Route::post('/uploadproses', 'UploadController@proses_upload');

Route::get('/upload/hapus/{id}', 'UploadController@hapus');

//Transaction
/*Route::resource('transaction', 'TransactionController')->only([
    'index'
]);
Route::get('fetch_image/{id}', 'TransactionController@fetch_image');

Route::get('/admin/updateconfirmed/{id}', 'TransactionController@updateconfirmed');
Route::get('/admin/updateremembered/{id}', 'TransactionController@updateremembered');
Route::get('/admin/updatecanceled/{id}', 'TransactionController@updatecanceled');
*/
