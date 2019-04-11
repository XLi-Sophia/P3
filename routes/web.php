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

// view to welcome.blade.php without controller
Route::get('/','FormController@welcome');

// calculate when form submitted
Route::get('/calculate', 'FormController@calProcess');
// route /help page to FormController help()
Route::get('/help','FormController@help');