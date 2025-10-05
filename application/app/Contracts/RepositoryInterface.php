<?php

namespace App\Contracts;

interface RepositoryInterface
{
    public function find();
    public function findBy(string $column, mixed $value);
    public function save();
    public function update();
    public function remove();
}
