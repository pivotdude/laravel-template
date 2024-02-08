<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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
    Route::get("login", [AuthController::class, "showLoginForm"])->name("login");
    Route::post("loginAction", [AuthController::class, "login"])->name("loginAction");
    Route::get("register", [AuthController::class, "showRegisterForm"])->name("register");
    Route::post("registerAction", [AuthController::class, "register"])->name("registerAction");
    Route::get("logout", [AuthController::class, "logout"])->name("logout");
});

Route::middleware("auth")->prefix("statements")->group(function () {
    Route::get("", [PostController::class, "index"])->name("statements");
    Route::get("/create", [PostController::class, "showCreateForm"])->name("statements.create");
    Route::get("/{id}", [PostController::class, "showStatementForm"])->name("statement");
    Route::post("/createAction", [PostController::class, "create"])->name("statements.createAction");
    Route::get("/accepted/{id}", [PostController::class, "accepted"])->name("statements.accepted");
    Route::get("/declined/{id}", [PostController::class, "declined"])->name("statements.declined");
});

