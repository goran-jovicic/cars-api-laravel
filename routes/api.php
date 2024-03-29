<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CarsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'Auth\LoginController@authenticate');

Route::post('/register', 'Auth\RegisterController@register');

Route::middleware('jwt')->resource('cars', 'CarsController');
