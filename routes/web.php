<?php

use Illuminate\Support\Facades\Route;

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
//customercontroller
Route::get('/customer/add', 'Customercontroller@index')->name('add');
Route::post('/customer/store', 'Customercontroller@store')->name('customer_store');
Route::get('/customer/all', 'Customercontroller@all')->name('all');
Route::get('/customer/edit/{id}', 'Customercontroller@edit')->name('edit');
Route::post('/customer/edit/{id}', 'Customercontroller@update')->name('edit');
Route::get('/customer/delete/{id}', 'Customercontroller@delete')->name('delete');
Route::get('/customer/profile/{id}', 'Customercontroller@profile')->name('profile');


//Actioncontroller
Route::get('/action/add', 'Actioncontroller@index')->name('add-action');
Route::post('/action/store', 'Actioncontroller@store')->name('action-store');
Route::get('/customer/all_action/{id}', 'Actioncontroller@all')->name('all-actions');
