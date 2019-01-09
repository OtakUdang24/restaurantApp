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
Route::middleware(['auth', 'isWaiter'])->group(function ()
{
    Route::get('/home', 'ViewWaiterController@index');
    Route::get('/registrasi', 'ViewWaiterController@registrasi')->name('registrasi');
    Route::get('/order', 'ViewWaiterController@order')->name('order');
    Route::resource('inputOrder', 'OrderController');
});
