<?php
namespace App\Repositories;

use App\Models\Car;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class CarRepository extends Repository
{
    public function __construct(Car $post) {
        $this->model = $post;
    }

}

