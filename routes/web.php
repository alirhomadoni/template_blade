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
//home 
//Route::get('/', 'HomeController@home');
//Route::get('/home', 'HomeController@home');

//register and form 
//Route::get('/register', 'AuthController@register');
//Route::post('/welcomename', "AuthController@welcomename");
Route::get('/master', 'AuthController@master');
Route::get('/items', 'AuthController@items');
Route::get('/items/create', 'AuthController@create');
Route::get('/', 'AuthController@tugas_template_blade');
Route::get('/data-tables', 'AuthController@data_tabel');


