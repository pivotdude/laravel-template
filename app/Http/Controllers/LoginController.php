<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request): string {
        return "Это страница просмотра страницы входа";
    }
}
