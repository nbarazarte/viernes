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

Route::get('/', [
	'uses' => 'WelcomeController@index',
	'as' =>'welcome'
]);

//Route::post('/', 'WelcomeController@store');
//Route::get('/home', 'HomeController@index')->name('home');

Route::post('/upload', 'WelcomeController@upload')->name('upload');



/*Route::post('/upload', [
	'uses' => 'WelcomeController@upload',
	'as' =>'upload'
]);*/

Route::get('/mostrar', 'WelcomeController@mostrar');

Auth::routes();


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

