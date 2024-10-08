<?php

use App\Http\Controllers\CheckInController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ApiAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::post("/users", [UserController::class, "register"]);
Route::post("/users/login", [UserController::class, "login"]);

Route::middleware(ApiAuthMiddleware::class)->group(function () {
    Route::post("/checkin", [CheckInController::class, 'create']);
});
