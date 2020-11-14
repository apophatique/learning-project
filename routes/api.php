<?php

use Illuminate\Http\Request;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\StudentController;
use \App\Http\Controllers\ClothesController;

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

Route::group([
    'middleware' => ['cors'],
], function () {
    Route::post('/login', ['uses' => AuthController::class.'@login']);
    Route::post('/student', ['uses' => StudentController::class.'@create']);
    Route::delete('/student/{id}', ['uses' => StudentController::class.'@delete']);
    Route::get('/student', ['uses' => StudentController::class.'@search']);
    Route::put('/student/{id}', ['uses' => StudentController::class.'@update']);

    Route::get('/clothes', ['uses' => ClothesController::class.'@getAll']);
    Route::get('/clothes/{id}', ['uses' => ClothesController::class.'@get']);
    Route::put('/clothes/{id}', ['uses' => ClothesController::class.'@update']);
    Route::delete('/clothes/{id}', ['uses' => ClothesController::class.'@delete']);
    Route::post('/clothes', ['uses' => ClothesController::class.'@create']);
});
