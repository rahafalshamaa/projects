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
Route::get('/customer/add', 'Customercontroller@index')->name('add_customer');
Route::post('/customer/store', 'Customercontroller@store')->name('customer_store');
Route::get('/customer/all', 'Customercontroller@all')->name('all_customers');
Route::get('/customer/edit/{id}', 'Customercontroller@edit')->name('edit_customer');
Route::post('/customer/edit/{id}', 'Customercontroller@update')->name('update_customer');
Route::get('/customer/delete/{id}', 'Customercontroller@delete')->name('delete_customer');
Route::get('/customer/profile/{id}', 'Customercontroller@profile')->name('profile_customer');
Route::get('/customer/search', 'Customercontroller@search')->name('search_customer');


//Actioncontroller
Route::get('/action/add', 'Actioncontroller@index')->name('add_action');
Route::post('/action/store', 'Actioncontroller@store')->name('action_store');
Route::get('/customer/all_action/{id}', 'Actioncontroller@all')->name('all_actions');
// Route::get('/action/delete/{id}', 'Actioncontroller@delete')->name('delete');
Route::get('/action/search', 'Actioncontroller@search')->name('search_action');
Route::get('/action/sort_type', 'Actioncontroller@sort_type')->name('sort_type');
Route::get('/action/sort_date_desc', 'Actioncontroller@sort_date_desc')->name('sort_date_desc');
Route::get('/action/sort_date_asc', 'Actioncontroller@sort_date_asc')->name('sort_date_asc');
Route::get('/action/showbydate', 'Actioncontroller@showbydate')->name('showbydate');
Route::get('/action/showTypeByDate', 'Actioncontroller@showTypeByDate')->name('showTypeByDate');

