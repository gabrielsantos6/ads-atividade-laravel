<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilmeController;

use App\Http\Controllers\HomeController;


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

Route::group(['middleware' => 'web'], function(){
    Route::get('/', 'HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::resource('/filme', FilmeController::class);

Route::get('/filmes', 'FilmeController@index')->middleware('auth');;
Route::get('/filmes/add', 'FilmeController@create')->middleware('auth');;
Route::post('/filmes/store', 'FilmeController@store')->middleware('auth');;
Route::get('/filmes/{id}/edit', 'FilmeController@edit')->middleware('auth');;
Route::post('/filmes/update/{id}', 'FilmeController@update')->middleware('auth');;
Route::delete('/filmes/delete/{id}', 'FilmeController@destroy')->middleware('auth');;

