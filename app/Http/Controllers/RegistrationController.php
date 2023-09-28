<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(Request $request): string {
        return view("pages.registration");
    }
}
