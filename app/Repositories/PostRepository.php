<?php
namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository extends Repository
{
    public function __construct(Post $post) {
        $this->model = $post;
    }

}

