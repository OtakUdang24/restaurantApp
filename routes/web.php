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
    Route::get('/home', 'HomeController@waiter')->name('home');
    Route::get('/registrasi', 'ViewWaiterController@registrasi')->name('registrasi');
    Route::resource('order', 'OrderController');
    Route::resource('corder', 'ChangeOrderController');
    Route::resource('detOrder', 'DetOrderController');
});
Route::middleware(['auth', 'isAdmin'])->group(function ()
{
  Route::get('/home', 'HomeController@admin')->name('home');
  Route::resource('makanan', 'MakananController');
  Route::resource('user', 'UsersContorller');
  Route::resource('regisPel', 'RegisPelController');
  Route::resource('order', 'OrderController');
  Route::resource('detOrder', 'DetOrderController');
  Route::resource('corder', 'ListOfOrderController');
  Route::put('donn','ListOfOrderController@done')->name('donn');
  Route::match(['put', 'patch'], 'done/{id}','ListOfOrderController@done')->name('done_all');
});
