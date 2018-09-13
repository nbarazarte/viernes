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

//Login con twitter, facebook y google:
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//Route::post('/subscribe','PaymentsController@subscribe');
//Para pagar la reservación
Route::post('/suscribirse', [
	'uses' => 'PaymentsController@suscribirse',
	'as' =>'suscribirse'
]);

//para firebase:

Route::get('/Reportar-Mascota', [
	'uses' => 'FirebaseController@index',
	'as' =>'reportar'
]);

Route::post('/Reportar-Mascota', 'FirebaseController@insert');

//Route::get('/db','FirebaseController@index')->name('db');