<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class UserController extends Controller
{
    public function show()
    {
        return Inertia::render('user/userProfile', [
          'user' => ["name" => "Peter"]
        ]);
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
