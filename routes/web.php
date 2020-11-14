<?php
use App\Http\Controllers\ClothesController;
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

Route::get('/clothes', ['uses' => ClothesController::class.'getAllClothes']);
Route::get('/clothes/{id}', ['uses' => ClothesController::class.'getClothing']);
Route::put('/clothes/{id}', ['uses' => ClothesController::class.'updateClothing']);
Route::delete('/clothes/{id}', ['uses' => ClothesController::class.'deleteClothing']);

Route::post('/clothes', ['uses' => ClothesController::class.'addNewClothing']);
