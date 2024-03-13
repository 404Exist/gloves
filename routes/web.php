<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SoicaliteAuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    if (auth()->check()) {
        return view('auth');
    }

    return view('guest');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::post('/signup', [AuthController::class, 'signUp'])->name('signup');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::get('social-auth/{provider}/callback', [SoicaliteAuthController::class, 'callback'])
        ->where('provider', 'facebook|google|twitter');
    Route::get('social-auth/{provider}/redirect', [SoicaliteAuthController::class, 'redirect'])
        ->where('provider', 'facebook|google|twitter')
        ->name('social.redirect');
});

Route::middleware('auth')->get('logout', [AuthController::class, 'logout'])->name('logout');
