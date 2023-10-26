<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function index(): View {
        return view('pages.index');
    }

    public function showLogin(): View {
        return view('pages.login');
    }
    public function showRegistration(): View {
        return view('pages.registration');
    }
    public function login(LoginRequest $request) {
        $array = $request->except(['_token', '_method']);
        if (!auth()->attempt($array)) {
            return redirect()->route('login')->withErrors(["email" => "Incorrect password"])->withInput();
        }

        return redirect()->route('index');
    }
    public function registration(RegistrationRequest $request) {
        $array = $request->except(['_token', '_method']);
        $user = User::create($array);
        auth()->login($user);

        return redirect()->route("index");
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('index');
    }
}
