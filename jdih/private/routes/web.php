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
    return view('umum.home');
});

Auth::routes();
Route::get('/admin/log', 'LoginActivityController@index')->middleware('auth');
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/', 'AdminController@index')->name('admin');
//     // Route::resource('/about', 'AboutController')
//     //     ->except(['create', 'edit', 'update']);
//     Route::resource('admin/kategori', 'KategoriController');
    Route::resource('admin/produk', 'ProdukController');
    Route::resource('admin/berita', 'BeritaController');
    Route::resource('admin/galeri', 'GaleriController');
    Route::resource('admin/profil', 'ProfilController');
    Route::resource('admin/kategori', 'KategoriController'); 
// });

Route::get('/home', 'HomeController@index')->name('app');
Route::get('/admin', 'AdminController@index');
// Route::get('/admin/kategori', 'KategoriController@index');
// Route::get('/admin/kategori/add', 'KategoriController@create');
// Route::post('/admin/kategori', 'KategoriController@store');
// Route::get('/admin/kategori/{id}', 'KategoriController@show');
// Route::get('/admin/kategori/{id}', 'KategoriController@edit');
// Route::put('/admin/kategori/{id}', 'KategoriController@update');
// Route::delete('/admin/kategori/{id}', 'KategoriController@destroy');


Route::get('/admin/akun', 'UsersController@index');

Route::get('/', 'UmumController@index');
Route::get('/produk', 'UmumController@produk');
Route::get('/berita/{$id}', 'UmumController@berita')->name('umum.berita');
Route::get('/berita/{id}', 'UmumController@editBerita')->name('umum.berita.show');