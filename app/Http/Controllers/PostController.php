<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request): string {
        return "Это страница просмотра постов";
    }
    public function show(Request $request, int $id): string {
        return "Это страница просмотра поста №" . $id;
    }
    public function delete(Request $request, int $id): string {
        return "Это страница просмотра поста №" . $id;
    }
    public function like(Request $request, int $id): string {
        return "Это страница просмотра поста №" . $id;
    }
}
