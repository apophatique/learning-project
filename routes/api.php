<?php

use Illuminate\Http\Request;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\StudentController;
use \App\Http\Controllers\FurnitureController;
use \App\Http\Controllers\TelegramController;

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

    Route::post('/furniture', ['uses' => FurnitureController::class.'@create']);
    Route::delete('/furniture/{id}', ['uses' => FurnitureController::class.'@delete']);
    Route::get('/furniture', ['uses' => FurnitureController::class.'@search']);
    Route::put('/furniture/{id}', ['uses' => FurnitureController::class.'@update']);

    Route::get('/telegram-auth', ['uses' => TelegramController::class.'@auth']);
});