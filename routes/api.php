<?php

use Illuminate\Http\Request;

Route::get('siswa', 'SiswaController@index');
Route::post('siswa', 'SiswaController@store');
Route::put('/siswa/{id}', 'SiswaController@update');
Route::delete('/siswa/{id}', 'SiswaController@destroy');
