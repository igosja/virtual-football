<?php
declare(strict_types=1);

use App\Http\Public\Controllers\AuthController;
use App\Http\Admin\Controllers\AuthController as AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::post('login', [AdminAuthController::class, 'login']);
});
Route::post('login', [AuthController::class, 'login']);
Route::post('signup', [AuthController::class, 'signup']);
