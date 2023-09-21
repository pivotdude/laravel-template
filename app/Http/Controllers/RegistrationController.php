<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(Request $request): string {
        return "Это страница просмотра страницы регистрации";
    }
}
