<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VsskController as VSSK;
use App\Http\Controllers\KovrochistController as Kovrochist;
use App\Http\Controllers\CleanKirovController as CleanKirov;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::domain(env('VSSK_URL'))->controller(VSSK::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::domain(env('KOVROCHIST_URL'))->controller(Kovrochist::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::domain(env('CLEANKIROV_URL'))->controller(CleanKirov::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
