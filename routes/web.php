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

Route::get('/', [AuthController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login.auth', [AuthController::class, 'login'])->name('auth.login');

Route::get('/registration', [AuthController::class, 'showRegistration'])->name('registration');
Route::post('/registration.auth', [AuthController::class, 'registration'])->name('auth.registration');

Route::get('/logout.auth', [AuthController::class, 'logout'])->name('logout');
