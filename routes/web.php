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

//Route::get('/', function () {
 //   echo "aurel cantik";
//});

Route::get('/', function () {
   return view('welcome');
});

Route::get('/telo', 'CapungController@index');
Route::get('/brokoli', 'CapungController@pujangga');
Route::get('/brokoli/dewa', 'CapungController@siti');

//Route::get('/Customer', 'CustomerController@index');
//Route::get('/supplier', 'SupplierController@index');

//Route::get('/Customer', 'CustomerController@create');

//Route::get('/Customer/store', 'CustomerController@store');

Route::resource('Customer', 'CustomerController');
Route::resource('Supplier', 'SupplierController');
Route::resource('Employee', 'EmployeeController');