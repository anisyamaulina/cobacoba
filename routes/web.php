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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'Auth\RegisterController@index')->name('register');

Route::get('loginAnggota', function () {
	return view('auth/loginAnggota');
})->name('loginAnggota');

Route::get('homeinfo', function () {
	return view('homeinfo');
})->name('homeinfo');

Route::get('selengkapnya', function () {
	return view('selengkapnya');
})->name('selengkapnya');

Route::get('/profil', 'UsersController@index')->name('profil');

Route::get('/editprofil/{id}','UsersController@edit')->name('editprofil');

Route::post('/users/update','UsersController@update');

Route::get('fasilitas', function () {
	return view('fasilitas');
})->name('fasilitas');

Route::get('/addpeminjaman', 'PeminjamanController@add')->name('add');

Route::post('/save', 'PeminjamanController@save')->name('save');

Route::get('/datapeminjaman', 'PeminjamanController@index')->name('list');

Route::get('/editpeminjaman/{id}','PeminjamanController@edit')->name('editpeminjaman');

Route::post('/peminjaman/update','PeminjamanController@update')->name('update');

Route::get('/datapeminjaman/hapus/{id}', 'PeminjamanController@delete');

Route::post('/submit_peminjaman', 'PeminjamanController@submit_peminjaman')->name('submit_peminjaman');

Route::get('data', function () {
	return view('datapeminjaman');
})->name('data');

Route::get('agenda', function () {
	return view('agenda');
})->name('agenda');

Route::get('events', 'EventController@index')->name('events');








//route CRUD
// Route::get('/users/tambah','UsersController@tambah');
// Route::post('/users/store','UsersController@store');