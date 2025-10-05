<?php

declare(strict_types=1);

namespace App\Infrastructure\Repositories;

use App\Contracts\RepositoryInterface;

final class UserRepository implements RepositoryInterface
{
    public function __construct() {}

    public function find() {}

    public function findBy(string $column, mixed $value) {}

    public function save() {}

    public function remove() {}

    public function update() {}
}
