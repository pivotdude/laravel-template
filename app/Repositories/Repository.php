<?php
namespace App\Repositories;

use App\Interfaces\BaseInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Repository implements BaseInterface
{
    public Model $model;

    public function getAll(): Collection
    {
        return $this->model->all();
    }
    public function findById(int $id): Collection
    {
        return $this->model->find($id);
    }
}
