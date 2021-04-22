<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AutorController;
use App\Http\Controllers\Api\LibroController;
use App\Http\Controllers\Api\UserController;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::middleware('auth:api')->group(function () {

    Route::resource('libros',LibroController::class);
    Route::resource('autors',AutorController::class);

    Route::post('libros/update/{id}',[LibroController::class,'update']);
    Route::post('libros/destroy/{id}',[LibroController::class,'delete']);
});
Route::post('register',[UserController::class,'register']);
Route::post('login', [UserController::class,'login']);
