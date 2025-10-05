<?php

declare(strict_types=1);

use App\Application\Controllers\UserController;
use App\Infrastructure\Repositories\UserRepository;
use Leaf\Http\Request;
use Leaf\Http\Response;

app()->get('ping', fn() => response()->json(showCode: true, data: [
    'err' => true,
    'msg' => 'pong',
    'data' => null
]));

app()->get('usuario', function ($req = new Request(), $res = new Response()) {
    $repo = new UserRepository();

    $c = new UserController($req, $res, $repo);
    $processResult = $c->read();

    return $processResult->present();
});
