<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\AuthController;
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
   Route::get("/", "index")->name('posts');
   Route::get("/{id}", "show")->name('post');
   Route::get("/create", "create")->name('post.create');
   Route::get("/{id}/edit", "edit")->name('post.edit');
});
Route::prefix("posts")->group(function () {
    Route::post("/create", [PostController::class, "actionCreate"])->name('api.post.create');
    Route::get("/{id}/like", [PostController::class, "actionLike"])->name('api.post.like');
    Route::delete("/{id}/delete", [PostController::class, "actionDelete"])->name('post.delete');
    Route::put("/{id}/update", [PostController::class, "actionUpdate"])->name('post.update');
});



Route::controller(UserController::class)->prefix("user")->group(function () {
    Route::get("/", "index");
    Route::post("/", "create");
    Route::get("/{id}", "show");
});

Route::get("/", function () {
    return view("index");
})->name("index");

Route::prefix("")->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('loginSend', [AuthController::class, 'actionLogin'])->name('auth.auth.login');

    Route::get('registration', [AuthController::class, 'registration'])->name('auth.registration');
    Route::post('registration', [AuthController::class, 'actionRegister'])->name('api.auth.registration');
});
