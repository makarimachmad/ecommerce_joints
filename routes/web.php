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

//admin
Route::get('/admin','AdminController@index');
Route::get('/admin/create','AdminController@create');
Route::get('/admin/edit/{{admin}}','AdminController@edit');
Route::get('/admin/destroy/{{admin}}','AdminController@destroy');
Route::get('/admin/update/','AdminController@update');
Route::post('/admin','AdminController@store');


//pelanggan
Route::get('/','BerandasController@index');
Route::get('/{beranda}','BerandasController@show');//selengkapnya
Route::get('/kemeja','KemejaController@index');
//Route::get('/kemeja/{kemeja}','KemejaController@index');
Route::get('/bmuslim','BMuslimController@index');
Route::get('/jaket','JaketController@index');
Route::get('/kaos','KaosController@index');
