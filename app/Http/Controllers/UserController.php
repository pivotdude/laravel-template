<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    public UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function show(Request $request, int $id): string
    {
        $user = $this->userRepository->findById($id);
        return view("user.show", ["user" => $user]);
//        return Inertia::render('user/userProfile', [
//          'user' => ["name" => "Peter"]
//        ]);
    }
    public function create(UserStoreRequest $request): string
    {
//        $validate = $request;
//        dd($validate);
//        return $validate;
        return "h";
    }

    public function toProfile()
    {
        return to_route('user.show');
    }

    public function index()
    {
        $users = $this->userRepository->getAll();
        echo $users;
        return $users;

//        return Inertia::render('index', [
//            'user' => ["name" => "Peter"]
//        ]);
    }




}
