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

Route::get('/', function () {
    return view('welcome');
});

//	Route::webhooks('webhook-altan');

Route::group(['middleware' => ['cors']], function () {

	/*Route::post('webhook-altan', function () {
    return view('welcome');
	});*/

	Route::post('webhook-altan', 'WebhookController@handle');
	Route::post('recurrente', 'ConektaController@recurrente');
	Route::post('co-webhook', 'ConektaController@cowebhook');
	Route::post('webhook', 'ConektaController@webhook');
	Route::get('recurrente', function(){
		return view('comprobante');
	});

	Route::get('solicitud', function(){
		return view('solicitud');
	});

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
