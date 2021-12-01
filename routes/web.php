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



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/test',function(){return "hello"; })->middleware('SuperAdmin');

// Route BackEnd  //

Route::get('/admin', 'DashboardController@index')->name('dashboard');

//  Kategori menu

Route::get('/kategorimenu', 'KategoriMenuController@index')->name('kategorimenu');
Route::get('/kategor.create', 'KategoriMenuController@create')->name('kategorimenu.create');
Route::post('/kategor.store', 'KategoriMenuController@store')->name('kategorimenu.store');
Route::get('/kategor.delete.{id}', 'KategoriMenuController@destroy')->name('kategorimenu.destroy');

//  Menu Bandung
Route::get('/menubdg', 'CaffeController@index')->name('menubdg');
Route::get('/menubdg.create', 'CaffeController@create')->name('menubdg.create');
Route::post('/menubdg.store', 'CaffeController@store')->name('menubdg.store');
Route::get('/menubdg.delete.{id}', 'CaffeController@destroy')->name('menubdg.destroy');
Route::get('/menubdg.edit.{id}', 'CaffeController@edit')->name('menubdg.edit');
Route::post('/menubdg.update.{id}', 'CaffeController@update')->name('menubdg.update');

//  Menu Cimahi

Route::get('/menucmh', 'CaffeController@index2')->name('menucmh');
Route::get('/menucmh.create', 'CaffeController@create2')->name('menucmh.create');
Route::post('/menucmh.store', 'CaffeController@store2')->name('menucmh.store');
Route::get('/menucmh.delete.{id}', 'CaffeController@destroy2')->name('menucmh.destroy');
Route::get('/menucmh.edit.{id}', 'CaffeController@edit2')->name('menucmh.edit');
Route::post('/menucmh.update.{id}', 'CaffeController@update2')->name('menucmh.update');


// Konten
Route::get('/galeri', 'GaleriController@index')->name('galeri');

//  Frenchaise

Route::get('/kopiportal', 'FrenchaiseController@index')->name('kopiportal');
Route::get('/kopiportal.create', 'FrenchaiseController@create')->name('kopiportal.create');
Route::post('/kopiportal.store', 'FrenchaiseController@store')->name('kopiportal.store');


//  Route Statistik

Route::get('/statistik', 'StatistikController@index')->name('statistik');



// Route FrontEnd
Route::get('/', 'Landingportalcontroller@index')->name('landing');
Route::get('/cafe81', 'Cafe81Controller@index')->name('cafe81');
