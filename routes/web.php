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
 	
Route::get('/', 'SiteController@index');
Route::get('/register', 'SiteController@register');
Route::post('/register/userbaru', 'SiteController@userbaru');
Route::post('/search', 'DashboardController@search');


//Auth::routes();
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//middleware di auth,pengaman di laravel biar tidak di tembus
Route::group(['middleware'=>'auth','checkRole:1'],function(){
	Route::get('/siswa', 'SiswaController@index');
	Route::post('/siswa/create', 'SiswaController@create');
	Route::get('/siswa/{id}/edit', 'SiswaController@edit');
	Route::post('/siswa/{id}/update', 'SiswaController@update');
	Route::get('/siswa/{id}/delete', 'SiswaController@delete');
	Route::get('/siswa/{id}/profile', 'SiswaController@profile');
	Route::get('/CekUser', 'UserController@index');
	Route::get('/admin/{id}/delete', 'UserController@delete');
	Route::get('/admin/menu/create', 'UserController@menucreate');
	Route::post('/admin/create', 'UserController@create');
	Route::get('/CekPendaftar', 'PelamarController@cekpendaftar');
	Route::get('/pelamar/{KTP}/updateterima', 'PelamarController@updateterima');
	Route::get('/menu/menuloker', 'AdminController@menuloker');
	Route::get('/menu/menupengumuman', 'AdminController@menupengumuman');
	Route::post('/admin/entriloker', 'AdminController@entriloker');
	Route::post('/admin/entripengumuman', 'AdminController@entripengumuman');
	Route::get('/TES', 'AdminController@tes');
	
});

Route::group(['middleware'=>'auth','checkRole:1,2'],function(){
	Route::get('/dashboard', 'DashboardController@index');
});

Route::group(['middleware'=>'auth','checkRole:3'],function(){
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/pelamar', 'PelamarController@profile');
	Route::post('/pelamar/{ktp}/update', 'PelamarController@update');
	Route::get('/pendidikan', 'PendidikanController@index');
	Route::post('/pendidikan/{email}/update', 'PendidikanController@update');
	Route::get('/pendidikan/dokumen', 'PendidikanController@dokumen');
	Route::post('/uploadDokumen/{email}/upload', 'PendidikanController@upload');
	Route::get('/Rekrutmen', 'RekrutmenController@index');
	Route::get('/rekrutmen/{id}/rekrutmenhasil', 'RekrutmenController@rekrutmenhasil');
	Route::get('/rekrutmen/{id}/daftar', 'RekrutmenController@daftar');
	Route::get('/Pengumuman', 'PengumumanController@index');
	Route::get('/pengumuman/{id}/profile', 'PengumumanController@profile');
	Route::get('/file/download/{files}','PengumumanController@show')->name('downloadfile');
	Route::get('/Riwayat', 'RiwayatController@index');
});
