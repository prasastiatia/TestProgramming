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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin')->name('login');
Route::get('/daftar', 'AuthController@getRegister');
Route::post('/daftar', 'AuthController@postRegister')->name('register');
Route::get('/User/logout','AuthController@LogoutUser')->name('logout');

Route::get('/User/home','web@dashboard')->name('dashboard_user');
Route::get('/User/data_siswa','web@data_siswa')->name('data_siswa');
Route::post('/User/tambah_data_siswa','web@postDataSiswa')->name('tambah_data_siswa');
Route::get('/User/data_siswa/edit/{id}', 'web@edit')->name('edit_siswa');
Route::put('/User/data_siswa/update/{id}', 'web@update');
Route::get('/User/data_siswa/hapus/{id}', 'web@delete');

Route::get('/User/logic_perulangan','web@logicPerulangan')->name('logic');


Route::resource('data_siswa', 'Data_siswa');


