<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/digitalPrinting', 'digitalPrintingController@index');
Route::get('/xxl', 'xxlController@index');
Route::get('/offset', 'offsetController@index');
Route::get('/web2print', 'web2printController@index');
Route::get('/packaging', 'packagingController@index');
Route::get('/creative', 'creativeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'HomeController@index']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);