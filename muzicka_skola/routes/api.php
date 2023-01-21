<?php

use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\TerminController;
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

Route::get('profesor', [ProfesorController::class, 'index']);
Route::get('profesor/{id}', [ProfesorController::class, 'show']);
Route::delete('profesor/{id}', [ProfesorController::class, 'destroy']);
Route::post('/profesor', [ProfesorController::class, 'store']);
Route::put('/profesor/{id}', [ProfesorController::class, 'update']);
Route::get('termin', [TerminController::class, 'index']);
Route::get('termin/{id}', [TerminController::class, 'show']);
