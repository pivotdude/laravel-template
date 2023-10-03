<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\RegistrationController;
use \App\Http\Controllers\UserController;

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

Route::controller(PostController::class)->prefix("posts")->group(function () {
   Route::get("/", "index");
   Route::get("/{id}", "show");
   Route::get("/{id}/create", "create");
   Route::get("/{id}/like", "like");
});

Route::controller(UserController::class)->prefix("user")->group(function () {
    Route::get("/", "index");
    Route::post("/", "create");
    Route::get("/{id}", "show");
});

Route::get("/", function () {
    return view("index");
});

Route::get("/login", [LoginController::class, "index"]);
Route::get("/registration", [RegistrationController::class, "index"]);
