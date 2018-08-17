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

Route::get('/add_user', 'HomeController@add_user')->name('add_user');

Route::get('/view_user_list', 'HomeController@view_user_list')->name('view_user_list');

Route::get('/view_voucher_list', 'HomeController@view_voucher_list')->name('view_voucher_list');

Route::get('/view_voucher', 'HomeController@view_voucher')->name('view_voucher');