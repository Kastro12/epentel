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
    return view('index');
});

Route::get('/firme', function () {
    return view('firme');
});


Route::get('/','ZaposleniController@index');
Route::get('/firme','ZaposleniController@firme');
Route::get('/proslaZaposlenja','ZaposleniController@proslaZaposlenja');
Route::get('/unesi','ZaposleniController@unesi');
Route::post('/unesi','ZaposleniController@kreiraj')->name('unos');
Route::get('/promeni/{id}','ZaposleniController@promeni')->name('promeni');
Route::put('/promeni/azuriraj/{id}','ZaposleniController@azuriraj');
Route::delete('/brisanjeZaposlenog/{id}','ZaposleniController@obrisi');
