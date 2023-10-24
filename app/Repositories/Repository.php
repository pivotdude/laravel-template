<?php
namespace App\Repositories;

use App\Interfaces\BaseInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Repository implements BaseInterface
{
    public Model $model;

    public function getAll()
    {
        return $this->model->all();
    }
    public function getById(int $id)
    {
        $collection = $this->model->with("user")->where('id', $id)->first();

        if ($collection) {
            return $collection->toArray();
        }

        return [];
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function deleteById(int $id) {
        return $this->model->destroy($id);
    }
    public function updateById(int $id, array $data) {
        return $this->model->where('id', $id)->update($data);
    }
}
