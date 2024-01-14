<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
})->name("index");

Route::prefix("")->group(function () {
    Route::get("login", [AuthController::class, "showLoginForm"])->name("loginForm");
    Route::post("loginAction", [AuthController::class, "login"])->name("login");
    Route::get("register", [AuthController::class, "showRegisterForm"])->name("registerForm");
    Route::post("registerAction", [AuthController::class, "register"])->name("register");
    Route::get("logout", [AuthController::class, "logout"])->name("logout");
});
