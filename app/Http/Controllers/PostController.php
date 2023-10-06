<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository) {
        $this->postRepository = $postRepository;
    }
    public function index(Request $request): \Illuminate\View\View {
        $posts = $this->postRepository->getAll();
        return view('pages.posts', ["posts" => $posts]);
    }
    public function show(Request $request, int $id): string {
        return "Это страница просмотра поста №" . $id;
    }
    public function create(Request $request, int $id): string {
        return "Это страница создания поста №" . $id;
    }
    public function like(Request $request, int $id): string {
        return "Это страница лайка поста №" . $id;
    }
}
