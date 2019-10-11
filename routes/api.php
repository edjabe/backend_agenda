<?php

use Illuminate\Http\Request;

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
Route::group(['prefix' => 'v1'], function () {
    Route::post('login', 'Auth\AuthApiController@login');

    Route::group(['middleware' => ['jwt.auth']], function () {

        Route::prefix('sedes')->group(function () {
            Route::get('/', 'SedeController@index');
        });

        Route::prefix('prestaciones')->group(function () {
            Route::get('/', 'PrestacionController@index');
        });

        Route::prefix('disponibilidad')->group(function () {
            Route::get('/', 'AgendaController@index');
        });

        Route::prefix('login')->group(function () {
            Route::post('/refresh', 'Auth\AuthApiController@refresh');
            Route::post('logout', 'Auth\AuthApiController@logout');
            Route::post('/me', 'Auth\AuthApiController@me');
        });
    });
});
