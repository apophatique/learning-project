<?php

use Illuminate\Http\Request;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\StudentController;

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

Route::group([], function () {
    Route::post('/login', ['uses' => AuthController::class.'@login']);
    Route::post('/student', ['uses' => StudentController::class.'@create']);
});