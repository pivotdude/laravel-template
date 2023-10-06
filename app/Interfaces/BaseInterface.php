<?php
namespace App\Interfaces;
use Illuminate\Database\Eloquent\Collection;

interface BaseInterface {
    public function getAll(): Collection;
    public function findById(int $id): Collection;
//    public function create(): Collection;
//    public function update(int $id): Collection;
//    public function delete(int $id): Collection;
//    public function find(array $conditions): Collection;
//    public function findUnique(array $conditions): Collection;
}


