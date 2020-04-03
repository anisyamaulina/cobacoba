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

Auth::routes(['verify' => true]);

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

Route::get('profil', function () {
	return view('profil');
})->name('profil');

Route::get('/profil', 'UsersController@index')->name('profil');

Route::get('/editprofil/{id}','UsersController@edit')->name('edit');

Route::post('/users/update','UsersController@update');

Route::get('fasilitas', function () {
	return view('fasilitas');
})->name('fasilitas');

Route::get('peminjaman', function () {
	return view('peminjaman');
})->name('peminjaman');

Route::get('aksi', function () {
	return view('aksi');
})->name('aksi');

Route::get('agenda', function () {
	return view('agenda');
})->name('agenda');

Route::get('events', 'EventController@index')->name('events');


Route::get('/post/add', 'PostController@add')->name('post.add');

Route::post('/post/save', 'PostController@save')->name('post.save');





//route CRUD
// Route::get('/users/tambah','UsersController@tambah');
// Route::post('/users/store','UsersController@store');



Route::get('action', function () {
	return view('action');
})->name('action');

Route::get('dropdownn','DependentDropdownController@searchYourCity');