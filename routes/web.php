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

Route::get('/form', 'FormController@index')->name('form');
Route::post('/form', 'FormController@submit');

Route::get('/re-captcha', 'ReCaptchaController@index')->name('re-captcha');
Route::post('/re-captcha', 'ReCaptchaController@submit');

Route::get('/algolia', 'AlgoliaController@index');
Route::post('/algolia', 'AlgoliaController@search');

Route::get('/locale', 'LocalizationController@index');
Route::get('/set-locale/{lang?}', 'LocalizationController@setLocale');

Route::get('/artisan-command', 'ArtisanCommandController@index');
Route::get('/artisan-command/run/{command}/{params?}', 'ArtisanCommandController@runCommand');

Route::get('/queue', 'QueueController@index');
Route::get('/queue/run', 'QueueController@run');

Route::get('/event', 'EventController@index');
Route::get('/event/run', 'EventController@run');
Route::get('/event/listen', 'EventController@listen');

Route::get('/gates', 'GatesController@index');
Route::get('/gates/test', 'GatesController@test');
Route::get('/gates/subscribe', 'GatesController@subscribe')->middleware('auth');
Route::get('/gates/un-subscribe', 'GatesController@unSubscribe')->middleware('auth');

Route::get('/send-mail', 'MailController@sendMail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
