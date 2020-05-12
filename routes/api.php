<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::get('/','BerandasController@index');
Route::get('/admin','AdminController@index');
Route::get('/admin/create','AdminController@create');
Route::delete('/admin/destroy/{admin}','AdminController@destroy');
Route::get('/admin/edit/{admin}','AdminController@edit');
Route::get('/admin/{admin}','AdminController@show');
Route::patch('/admin/{admin}','AdminController@update');
Route::post('/admin/proses','AdminController@store');

Route::get('/','BerandasController@get');
Route::get('/paging','BerandasController@getpagging');
Route::get('/cari','BerandasController@cari');
Route::get('/kemeja','KategoriController@kemeja');
Route::get('/bmuslim','KategoriController@bmuslim');
Route::get('/jaket','KategoriController@jaket');
Route::get('/kaos','KategoriController@kaos');
Route::get('/selengkapnya/{beranda}','BerandasController@show');
Route::post('/registrasi','DaftarController@store');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
