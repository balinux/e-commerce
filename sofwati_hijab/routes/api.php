<?php

use Illuminate\Http\Request;

Route::get('tes', function () {
    return response([1,2,3,4], 200);
});

Route::post('barang', 'barangController@store');
Route::delete('barang/{id}', 'barangController@destroy');
Route::get('barang/{id}', 'barangController@show');
Route::get('thumb/{id}', 'barangController@thumb');
Route::put('barang/update/{id}', 'barangController@update');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
