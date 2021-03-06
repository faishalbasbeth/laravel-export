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

//verifikasi email user
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//laporan pdf
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cetak_pdf','PegawaiController@cetak_pdf');

//export excel laravel
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/export_excel', 'SiswaController@export_excel');
