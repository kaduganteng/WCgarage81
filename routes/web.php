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

Route::get('/caffe', 'CaffeController@ds')->name('dscaffe');
Route::get('/menubdg', 'CaffeController@index')->name('menubdg');
Route::get('/menubdg.create', 'CaffeController@create')->name('menubdg.create');
Route::post('/menubdg.store', 'CaffeController@store')->name('menubdg.store');
Route::get('/menubdg.delete.{id}', 'CaffeController@destroy')->name('menubdg.destroy');
Route::get('/menubdg.edit.{id}', 'CaffeController@edit')->name('menubdg.edit');
Route::post('/menubdg.update.{id}', 'CaffeController@update')->name('menubdg.update');

//  Menu Cimahi

Route::get('/menucmh', 'CaffeController@index2')->name('menucmh');

//  Frenchaise

Route::get('/fcaise', 'FrenchaiseController@ds')->name('fcaise');
Route::get('/menufcaise', 'FrenchaiseController@index')->name('menufcaise');

//  Route Statistik

Route::get('/statistik', 'StatistikController@index')->name('statistik');



// Route FrontEnd
Route::get('/', 'Landingportalcontroller@index')->name('landing');
Route::get('/cafe81', 'Cafe81Controller@index')->name('cafe81');