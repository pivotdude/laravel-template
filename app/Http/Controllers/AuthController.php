<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLoginForm(): View
    {
        return view("pages.login");
    }

    /**
     * Функция для авторизации
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        $input = $request->only(["login", "password"]);
        if (auth()->attempt($input)) {
            return redirect()->route("index");
        }
        return redirect()->back()->withErrors(["login" => "Неверный логин или пароль"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showRegisterForm(): View
    {

       return view("pages.register");
    }


    /**
     * Display the specified resource.
     */
    public function register(RegisterRequest $request): RedirectResponse
    {
        $input = $request->except("_token");
        User::create($input);
        return redirect()->route("index");
    }
    public function logout(): \Illuminate\Http\RedirectResponse
    {
        auth()->logout();
        return redirect()->route("index");
    }
}
