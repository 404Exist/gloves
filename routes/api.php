<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SoicaliteAuthController;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthController::class, 'user']);

    Route::post("logout", [AuthController::class, 'logout']);
});
Route::post("signup", [AuthController::class, 'signUp']);
Route::post("login", [AuthController::class, 'login']);


Route::whereIn('provider', ['facebook', 'google'])->group(function () {
    Route::get('social-auth/{provider}/callback', [SoicaliteAuthController::class, 'callback']);
    Route::get('social-auth/{provider}/redirect-url', [SoicaliteAuthController::class, 'redirectUrl']);
});
