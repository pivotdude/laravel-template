<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    public function show(UserStoreRequest $request): string
    {
        $validate = $request->validated();
        echo $validate;
//        return Inertia::render('user/userProfile', [
//          'user' => ["name" => "Peter"]
//        ]);
    }

    public function toProfile()
    {
        return to_route('user.show');
    }

    public function index()
    {
        return Inertia::render('index', [
            'user' => ["name" => "Peter"]
        ]);
    }

}
