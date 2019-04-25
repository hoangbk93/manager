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
Route::get('cap', function(){
	return view('cap');
})->name('cap');
Auth::routes();
Route::get('admin', function(){
	return view('admin/dashboard');
})->name('home');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/companies',function(){
	return view('admin.companies.index');
})->name('companies.index');

