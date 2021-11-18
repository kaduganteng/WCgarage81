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

Route::get('/', 'Landingportalcontroller@index')->name('landing');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/test',function(){return "hello"; })->middleware('SuperAdmin');

// Route BackEnd
Route::get('/admin','DashboardController@index')->name('dashboard');

Route::get('/caffe','CaffeController@ds')->name('dscaffe');
Route::get('/menucaffe','CaffeController@index')->name('menucaffe');

Route::get('/fcaise','FrenchaiseController@ds')->name('fcaise');
Route::get('/menufcaise','FrenchaiseController@index')->name('menufcaise');

Route::get('/statistik','StatistikController@index')->name('statistik');



// Route FrontEnd