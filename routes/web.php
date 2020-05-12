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
// Route::get('/admin','AdminController@index');
// Route::get('/admin/create','AdminController@create');
// Route::delete('/admin/destroy/{admin}','AdminController@destroy');
// Route::get('/admin/edit/{admin}','AdminController@edit');
// Route::patch('/admin/update/{admin}','AdminController@update');
// Route::post('/admin/proses','AdminController@store');



Route::get('/{any}','BerandasController@index')->where('any','.*');
// Route::get('/kemeja','KategoriController@kemeja');
// Route::get('/bmuslim','KategoriController@bmuslim');
// Route::get('/jaket','KategoriController@jaket');
// Route::get('/kaos','KategoriController@kaos');
//pelanggan vue
//Route::get('/','BerandasController@get');
//Route::get('/datapelanggan','BerandasController@index');
// Route::get('/{any}', function(){
//     return view('cobaberanda');
// })->where('any','.*');

//pelanggan

//Route::get('/kemeja/{kemeja}','KemejaController@index');
// Route::get('/{beranda}','BerandasController@show');
// Route::post('/registrasi','DaftarController@store');

Auth::routes();