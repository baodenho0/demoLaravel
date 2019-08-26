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

Route::get('/lay-ton-kho','TonKhoController@layTonKho');
Route::get('/lay-1','TonKhoController@lay1');

Route::get('/cap-nhat-ton-kho','TonKhoController@layCapNhatTonKho');
Route::post('/cap-nhat-ton-kho','TonKhoController@capNhatTonKho');

Route::get('/xoa-ton-kho','TonKhoController@xoaTonKho');
