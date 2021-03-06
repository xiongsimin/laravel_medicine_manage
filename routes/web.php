<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('goLogin','Login\LoginController@goLoginPage');
Route::post('login','Login\LoginController@login');
Route::get('chainStore','ChainStore\ChainStoreController@goChainStore');
Route::get('medicine','Medicine\MedicineController@goMedicine');
Route::get('welcome','WelcomeController@goWelcome');
