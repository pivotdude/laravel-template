<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\PostCreateStoreRequest;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\View\View;

class PostController extends Controller
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository) {
        $this->postRepository = $postRepository;
    }
    public function index(Request $request): View {
        $posts = $this->postRepository->getAll();
        return view('pages.posts', ["posts" => $posts]);
    }
    public function show(Request $request, int $id): View {
        $post = $this->postRepository->getById($id);
        if (!$post) return abort(404);
        return view("pages.post", ["post" => $post]);
    }
    public function create(Request $request) {
        return view('pages.post_create');
    }
    public function edit(Request $request, int $id): View {
        return view('pages.post_edit', ["post" => $this->postRepository->getById($id)]);
    }

    public function actionDelete (Request $request, int $id): string {
        return redirect()->back();
        //response()->json($this->postRepository->deleteById($id));
    }
    public function actionCreate (CreatePostRequest $request): string {
        $array = [...$request->all(), "user_id" => 1];
        $post = $this->postRepository->create($array);

        return redirect()->route('post', $post->id);
    }

    public function actionUpdate (CreatePostRequest $request, int $id): string {
        $this->postRepository->updateById($id, ["title" => $request->input("title"), "content" => $request->input("content")]);
        return redirect()->route("post", $id);
    }


}
