<?php

declare(strict_types=1);

namespace App\Application\Controllers;

use Leaf\Http\Request;
use Leaf\Http\Response;
use App\Application\Presenters\JsonPresenter;
use App\Contracts\PresenterInterface;
use App\Contracts\RepositoryInterface as RepositoryInterface;

final class UserController
{
    public function __construct(
        public readonly Request $request,
        public readonly Response $response,
        public readonly RepositoryInterface $repository,
    ) {}

    public function read(): PresenterInterface
    {
        $p = new JsonPresenter();
        $p->setData(['err' => false]);

        return $p;
    }
}
