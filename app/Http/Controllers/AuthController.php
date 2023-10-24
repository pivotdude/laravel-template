<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(Request $request): View {
        return view("pages.login");
    }
    public function registration(Request $request): View {
        return view("pages.registration");
    }
    public function loginAction(Request $request) {
        echo "sad";
//        return view("pages.login");
    }
    public function actionRegister(RegistrationRequest $request): string {
        $array = [...$request->all(), "name" => "Peter", "password" => bcrypt($request->input("password"))];
        $user = $this->userRepository->create($array);
        auth("web")->login($user);
        return redirect()->route('index');
    }
    public function actionLogin(LoginRequest $request): string {
        if (auth("web")->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
            return redirect()->route('index');
        }
        return redirect()->back()->withErrors(['email' => 'Пользоватль не найден']);
    }

}
