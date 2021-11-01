<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ConsultationController;
use App\Http\Controllers\Api\PersonneController;
use App\Http\Controllers\Api\ProjetController;
use App\Http\Controllers\Api\TherapyController;
use App\Http\Controllers\Api\DocumentController;

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

    Route::resource('consultations', ConsultationController::class);
    Route::resource('documents', DocumentController::class);
    Route::resource('projets', ProjetController::class);
    Route::resource('therapies', TherapyController::class);
    Route::resource('personnes', PersonneController::class);
});
