<?php
namespace App\Interfaces;
use Illuminate\Database\Eloquent\Collection;

interface BaseInterface {
    public function getAll();
    public function getById(int $id);
    public function create(array $data);
//    public function update(int $id): Collection;
//    public function delete(int $id): Collection;
//    public function find(array $conditions): Collection;
//    public function findUnique(array $conditions): Collection;
}


