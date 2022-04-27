<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home_data', [\App\Http\Controllers\Api\ApiController::class, 'homeData']);
Route::get('/all_users', [\App\Http\Controllers\Api\ApiController::class, 'allUsers']);
Route::get('/user', [\App\Http\Controllers\Api\ApiController::class, 'getUser']);
Route::post('/user/add', [\App\Http\Controllers\Api\ApiController::class, 'addUser']);
Route::post('/user/update', [\App\Http\Controllers\Api\ApiController::class, 'update']);
