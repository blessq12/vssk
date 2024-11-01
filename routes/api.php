<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ActionController;
use App\Http\Controllers\Api\RawController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(ActionController::class)->prefix('action')->group(function () {
    Route::get('help', 'help');
    Route::post('/create-client-request/{site_id}', 'createClientRequest');
    Route::get('/get-client-request/{id}', 'getClientRequest');
});

Route::controller(RawController::class)->prefix('raw')->group(function () {
    Route::get('help', 'help');
});
