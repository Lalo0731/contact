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

Route::get('/','WelcomeController@index');
Route::get('/my-welcome','WelcomeController@myIndex');
Route::get('/imeis','WelcomeController@imeis');

Route::get('/contact', 'WelcomeController@contact');

Route::post('/send-message-contact','Controller@sendMessagesContact');
Route::resource('files', 'FilesController')->middleware('auth');
Route::resource('beneficios', 'BeneficiosController')->middleware('auth');
Route::resource('imagenes', 'ImagenesController')->middleware('auth');

Route::post('/filesEdit/{file_id}','FilesController@actualizar');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/my-conecta','MyConectaController@index');
Route::get('/my-conecta-actions','MyConectaController@myConectaActions')->name('my-conecta-actions');
Route::post('/my-conecta-reference','MyConectaController@myConectaReference')->name('my-conecta-reference');
Route::post('/my-conecta-card','MyConectaController@myConectaCard')->name('my-conecta-card-payment');
Route::post('/my-conecta-oreda-payment','MyConectaController@myConectaOredaPayment')->name('my-conecta-oreda-payment');
Route::post('/my-conecta-purchase-by-client','MyConectaController@myConectaPurchaseByClient')->name('purchase-by-client');
Route::get('/successfully-operation','MyConectaController@successfullyOperation')->name('my-conecta-successfully-operation');
Route::get('/verify-exists-msisdn','MyConectaController@verifyExistsMSISDN')->name('verify-exists-msisdn');
Route::get('/consult-imei','MyConectaController@consultIMEI')->name('consultIMEI');
Route::get('/maps','MyConectaController@maps')->name('maps');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/notifications-webhook','Controller@notificationWH');
Route::post('/notifications-webhook2','Controller@notificationWH2');
Route::post('/conekta-webhook','Controller@conektaWH');
Route::post('/conekta-webhook-production','Controller@conektaWHProduction');

Route::get('/get-images-slide','FilesController@getImagesSlide')->name('getImagesSlide');

Route::get('/portal-cautivo','WelcomeController@portalCautivo');
Route::post('/pagaphone-webhook','RechargeController@pagaphoneWebhookProduction');
Route::post('/gestopago-webhook','RechargeController@gestopagoWebhookProduction');
Route::post('/compartcarga-webhook','RechargeController@compartecargaWebhookProduction');
Route::post('/recargamax-webhook','RechargeController@recargamaxWebhookProduction');
Route::post('/axios-webhook','RechargeController@axiosWebhookProduction');
Route::post('/payment-stripe','WelcomeController@paymentStripe');
Route::post('/payment-stripe-server','WelcomeController@paymentStripeServer');

Route::post('/diatel-webhook','RechargeController@diatelWebhook');
Route::post('/recharge-webhook','RechargeController@rechargeProduction');