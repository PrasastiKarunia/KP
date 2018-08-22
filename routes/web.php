<?php

use App\Coba;

Route::get('/', function () {
	return view('welcome');
});
Route::get('/jadwal', function () {
	return view('jadwal');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fkp', 'FkpController@index')->name('fkp');
Route::post('fkp.store','FkpController@store');
Route::get('fp', 'FpController@index')->name('fp');
Route::post('fp.store','FpController@store');
Route::get('ctk', 'JadwalController@index');