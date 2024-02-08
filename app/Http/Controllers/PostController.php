<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = $this->get_posts();

        foreach ($posts as $post) {
            $post->color = $this->get_color($post->status->code);
        }

        return view("pages.statements.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showCreateForm(): View
    {
        return view("pages.statements.create");
    }

    /**
     * Show the form for updating a new resource.
     */
    public function showStatementForm(int $id): View {
        $post = Post::find($id);
        $status = $post->status->code;
        $color = $this->get_color($status);
        return view("pages.statements.view", compact('post', 'color', 'status'));
    }

    public function create(StorePostRequest $request)
    {
        $requestData = $request->except("_token");
        $input = [...$requestData, "user_id" => auth()->user()->id, "status_id" => 1];
        $post = Post::create($input);
        return redirect()->route("statement", $post->id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function accepted(int $id) {
        Post::where("id", $id)->first()->update(["status_id" => 2]); // first or each
        return redirect()->back();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function declined(int $id): mixed {
        Post::where("id", $id)->first()->update(["status_id" => 3]); // first or each
        return redirect()->back();
    }

    private function get_color(string $code) {
        if ($code === "new") {
            return "text-bg-primary";
        } elseif ($code === "declined") {
            return "text-bg-danger";
        } elseif ($code === "accepted") {
            return "text-bg-success";
        }
    }

    private function get_posts() {
        $user = auth()->user();
        if ($user->isAdmin) {
            return Post::all();
        } else {
            return Post::where("user_id", $user->id)->get();
        }
    }
}
