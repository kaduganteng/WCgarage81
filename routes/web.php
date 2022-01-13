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

//  Kategori menu Bandung

Route::get('/kategorimenu', 'KategoriMenuController@index')->name('kategorimenu');
Route::get('/kategor.create', 'KategoriMenuController@create')->name('kategorimenu.create');
Route::post('/kategor.store', 'KategoriMenuController@store')->name('kategorimenu.store');
Route::get('/kategor.delete.{id}', 'KategoriMenuController@destroy')->name('kategorimenu.destroy');

// Kategori menu Cimahi

Route::get('/kategorimenucmh', 'KategoriMenuController@index2')->name('kategorimenucmh');
Route::get('/kategoricmh.create', 'KategoriMenuController@create2')->name('kategoricmh.create');
Route::post('/kategoricmh.store', 'KategoriMenuController@index2')->name('kategoricmh.store');
Route::get('/kategoricmh.delete.{id}', 'KategoriMenuController@destroy2')->name('kategoricmh.destroy');

// Kategori menu kopi

Route::get('/kategorimenukopi', 'KategoriMenuController@index3')->name('kategorimenukopi');
Route::get('/kategorikopi.create', 'KategoriMenuController@create3')->name('kategorikopi.create');
Route::post('/kategorikopi.store', 'KategoriMenuController@store3')->name('kategorikopi.store');
Route::get('/kategorikopi.delete.{id}', 'KategoriMenuController@destroy3')->name('kategorikopi.destroy');

//  Menu Bandung
Route::get('/menubdg', 'CaffeController@index')->name('menubdg');
Route::get('/menubdg.create', 'CaffeController@create')->name('menubdg.create');
Route::post('/menubdg.store', 'CaffeController@store')->name('menubdg.store');
Route::get('/menubdg.delete.{id}', 'CaffeController@destroy')->name('menubdg.destroy');
Route::match(['get', 'post'], '/editbdg{id}', 'CaffeController@edit');
Route::get('/menubdg.creategal', 'CaffeController@creategal')->name('menubdg.creategal');
Route::post('/menubdg.storegal', 'CaffeController@storegal')->name('menubdg.storegal');
Route::get('/menubdg.deletegal.{id}', 'CaffeController@destroygal')->name('menubdg.destroygal');



//  Menu Cimahi

Route::get('/menucmh', 'CaffeController@index2')->name('menucmh');
Route::get('/menucmh.create', 'CaffeController@create2')->name('menucmh.create');
Route::post('/menucmh.store', 'CaffeController@store2')->name('menucmh.store');
Route::get('/menucmh.delete.{id}', 'CaffeController@destroy2')->name('menucmh.destroy');
Route::match(['get', 'post'], '/editcmh{id}', 'CaffeController@edit2');
Route::get('/menucmh.creategal', 'CaffeController@creategal2')->name('menucmh.creategal2');
Route::post('/menucmh.storegal', 'CaffeController@storegal2')->name('menucmh.storegal2');
Route::get('/menucmh.deletegal.{id}', 'CaffeController@destroygal2')->name('menucmh.destroygal');



// Galeri
Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::get('/galeri.create', 'GaleriController@create')->name('galeri.create');
Route::post('/galeri.store', 'GaleriController@store')->name('galeri.store');
Route::get('/galeri.delete.{id}', 'GaleriController@destroy')->name('galeri.destroy');

//Event
Route::get('/event', 'EventController@index')->name('event');
Route::get('/event.create', 'EventController@create')->name('event.create');
Route::post('/event.store', 'EventController@store')->name('event.store');
Route::get('/event.delete.{id}', 'EventController@destroy')->name('event.destroy');
Route::get('/event.edit.{id}', 'EventController@edit')->name('event.edit');
Route::post('/event.update.{id}', 'EventController@update')->name('event.update');




//  Frenchaise

Route::get('/kopiportal', 'FrenchaiseController@index')->name('kopiportal');
Route::get('/kopiportal.create', 'FrenchaiseController@create')->name('kopiportal.create');
Route::post('/kopiportal.store', 'FrenchaiseController@store')->name('kopiportal.store');
Route::get('/kopiportal.delete{id}', 'FrenchaiseController@destroy')->name('kopiportal.destroy');
Route::match(['get', 'post'], '/editkopi{id}', 'FrenchaiseController@edit');
Route::get('/kopiportal.creategal', 'FrenchaiseController@creategal')->name('kopiportal.creategal');
Route::post('/kopiportal.storegal', 'FrenchaiseController@storegal')->name('kopiportal.storegal');
Route::get('/kopiportal.deletegal.{id}', 'FrenchaiseController@destroygal')->name('kopiportal.destroygal');




//  Route Statistik

Route::get('/saran', 'SaranController@index')->name('saran');



// Route FrontEnd

Route::get('/', 'Landingportalcontroller@index')->name('landing');
Route::get('/about', 'AboutController@index')->name('aboutportal');
Route::get('/contact', 'ContactController@index')->name('contactportal');
Route::post('/contact.store', 'ContactController@store')->name('contactportal.store');
Route::get('/contact.delete.{id}', 'ContactController@destroy')->name('contactportal.destroy');


//Route Caffe Bandung
Route::get('/cafe81', 'Cafe81Controller@index')->name('cafe81');
Route::get('/cafebdg.menu', 'Cafe81Controller@menubdg')->name('menubdgfe');
Route::get('/cafebdg.galeri', 'Cafe81Controller@galeribdg')->name('galeribdgfe');


//Route Caffe Cimahi 
Route::get('/cafecmh', 'CafecmhController@index')->name('cafecmh');
Route::get('/cafecmh.menu', 'CafecmhController@menucmh')->name('menucmhfe');
Route::get('/cafecmh.galeri', 'CafecmhController@galericmh')->name('galericmhfe');


Route::get('/koportal', 'KopiportalController@index')->name('kopiprt');
Route::get('/koportal.menu', 'KopiportalController@menuportal')->name('menukopiprt');
Route::get('/koportal.galeri', 'KopiportalController@galeriportal')->name('galeriportalfe');
