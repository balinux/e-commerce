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
    return view('welcome');
});

Route::get('home/galery/{id}', 'HomeController@galery');
Route::post('home/galery/', 'HomeController@storeimage');

Route::post('barang', 'barangController@store');
Route::get('barang', 'barangController@index');
Route::put('barang/{id}', 'barangController@update');
Route::delete('barang/{id}', 'barangController@destroy');
Route::post('barang/galery','barangController@galery');

Route::get('about', function() {
    return App\About::first();
});

Route::get('shop', 'barangController@shop');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
