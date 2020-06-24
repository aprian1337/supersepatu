<?php

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

Route::get('/', function () {
    return redirect()->intended('/home');
});

Route::get('home', 'LandingPageController@index')->name('home');

// SHOP
Route::get('buy/{id}', 'ShopController@buy')->name('buy');
Route::get('buy', 'ShopController@buy')->name('buy');
Route::post('buy', 'ShopController@processBuying')->name('processBuying');
Route::get('success', 'ShopController@SuccessBuying')->name('successBuying');
Route::get('confirm', 'ShopController@ConfirmBuying')->name('confirmBuying');
Route::post('confirm', 'ShopController@ProcessConfirm')->name('processConfirm');

// AUTH
Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@process')->name('processLogin');
Route::get('admin/logout', 'AuthController@logout')->name('logout');

// ADMIN FITUR
Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/admin/transaksi', 'AdminController@transaksi')->name('transaksi');
    Route::get('/admin/konfirmasi', 'AdminController@konfirmasi')->name('konfirmasi');
    Route::post('/admin/konfirmasi/{id}', 'AdminController@konfirmasiProcess')->name('confirmed');
    Route::resource('admin/barang', 'BarangController');

});
