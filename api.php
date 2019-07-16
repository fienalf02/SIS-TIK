<?php

use Illuminate\Http\Request;

Route::get('siswak', 'SiswaKelasController@index');
Route::post('siswak', 'SiswaKelasController@store');
Route::put('/siswak/{id}', 'SiswaKelasController@update');
Route::delete('/siswak/{id}', 'SiswaKelasController@destroy');

Route::get('guru', 'GuruController@index');
Route::post('guru', 'GuruController@store');
Route::put('/guru/{id}', 'GuruController@update');
Route::delete('/guru/{id}', 'GuruController@destroy');

Route::get('jadwal', 'JadwalController@index');
Route::post('jadwal', 'JadwalController@store');
Route::put('/jadwal/{id}', 'JadwalController@update');
Route::delete('/jadwal/{id}', 'JadwalController@destroy');

Route::get('jurusan', 'JurusanController@index');
Route::post('jurusan', 'JurusanController@store');
Route::put('/jurusan/{id}', 'JurusanController@update');
Route::delete('/jurusan/{id}', 'JurusanController@destroy');

Route::get('kelas', 'KelasController@index');
Route::post('kelas', 'KelasController@store');
Route::put('/kelas/{id}', 'KelasController@update');
Route::delete('/kelas/{id}', 'KelasController@delete');

Route::get('mapel', 'MapelController@index');
Route::post('mapel', 'MapelController@store');
Route::put('/mapel/{id}', 'MapelController@update');
Route::delete('/mapel/{id}', 'MapelController@destroy');