<?php

use App\Http\Controllers\v1\{CalendarDaysDisabledController, ReservationController};
use App\Http\Controllers\v1\AuthController;
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
Route::group([
    'prefix' => 'auth',
], function () {

    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::resource(
    'calendar_days_disabled',
    CalendarDaysDisabledController::class
)->only(['index'])->middleware('auth:sanctum');

