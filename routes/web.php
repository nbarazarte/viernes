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

//Route::get('/home', 'HomeController@index')->name('home');

//Publicas:
Route::get('/Servicios', [
	'uses' => 'PublicController@index',
	'as' =>'servicios'
]);

//Login con twitter, facebook y google:
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//stripe:
Route::post('/suscribirse', [
	'uses' => 'PaymentsController@suscribirse',
	'as' =>'suscribirse'
]);

Route::get('/Mascotas-Perdidas', [
	'uses' => 'MascotasPerdidasController@index',
	'as' =>'MascotasPerdidas'
]);

Route::post('/Mascotas-Perdidas', 'MascotasPerdidasController@store');