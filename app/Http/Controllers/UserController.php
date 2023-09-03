<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class UserController extends Controller
{
    public function show()
    {
        return Inertia::render('user/userProfile', [
          'user' => ["name" => "John"]
        ]);
    }
}
