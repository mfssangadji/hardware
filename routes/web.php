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

Route::get('/', 'PublicController@index')->name('welcome');
Route::get('learn/{id}', 'PublicController@learn');

Route::get('login', 'AuthController@login')->name('login');
Route::post('/loginpost', 'AuthController@loginpost');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
	Route::get('dashboard', function(){
		return view('dashboard');
	})->name('dashboard');

	Route::resource('pengguna', 'PenggunaController', [
		'names' => [
			'index' => 'pengguna', 'create' => 'pengguna.new', 'store' => 'pengguna.store',
			'edit' => 'pengguna.edit', 'update' => 'pengguna.update',
			'dastroy' => 'pengguna.destroy',
		]
	]);

	Route::resource('kategori', 'KategoriController', [
		'names' => [
			'index' => 'kategori', 'create' => 'kategori.new', 'store' => 'kategori.store',
			'edit' => 'kategori.edit', 'update' => 'kategori.update',
			'dastroy' => 'kategori.destroy',
		]
	]);

	Route::get('elearning/{id}', 'ElearningController@index')->name('elearning');
	Route::get('elearning/{id}/create', 'ElearningController@create');
	Route::post('elearning/{id}', 'ElearningController@store');
	Route::patch('elearning/{kategori_id}/{id}/', 'ElearningController@update');
	Route::get('elearning/{kategori_id}/{id}/edit', 'ElearningController@edit');
	Route::delete('elearning/{kategori_id}/{id}/', 'ElearningController@destroy');
});