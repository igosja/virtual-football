<?php
declare(strict_types=1);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(CityController::class)->prefix('cities')->group(function () {
        Route::get('', 'index');
        Route::post('', 'store');
        Route::get('{city}', 'show');
        Route::put('{city}', 'update');
    });
    Route::controller(CountryController::class)->prefix('countries')->group(function () {
        Route::get('', 'index');
        Route::post('', 'store');
        Route::get('{country}', 'show');
        Route::put('{country}', 'update');
    });
    Route::controller(StadiumController::class)->prefix('stadiums')->group(function () {
        Route::get('', 'index');
        Route::post('', 'store');
        Route::get('{stadium}', 'show');
        Route::put('{stadium}', 'update');
    });
    Route::controller(TeamController::class)->prefix('teams')->group(function () {
        Route::get('', 'index');
        Route::post('', 'store');
        Route::get('{team}', 'show');
        Route::put('{team}', 'update');
    });
    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('', 'index');
        Route::get('{user}', 'show');
    });
});

Route::prefix('admin')->group(function () {
    Route::post('login', [AuthController::class, 'adminLogin']);
});

Route::post('login', [AuthController::class, 'login']);
Route::post('signup', [AuthController::class, 'signup']);
