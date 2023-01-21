<?php

use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\TerminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
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

Route::get('profesor', [ProfesorController::class, 'index']);
Route::get('profesor/{id}', [ProfesorController::class, 'show']);

Route::get('termin', [TerminController::class, 'index']);
Route::get('termin/{id}', [TerminController::class, 'show']);

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthenticationController::class, 'logout']);
    Route::delete('profesor/{id}', [ProfesorController::class, 'destroy']);
    Route::post('/profesor', [ProfesorController::class, 'store']);
    Route::put('/profesor/{id}', [ProfesorController::class, 'update']);
});
