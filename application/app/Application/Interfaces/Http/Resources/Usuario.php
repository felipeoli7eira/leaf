<?php

app()->get('/', function () {});

app()->post('/', function () {
    $requestBody = file_get_contents('php://input');

    $bodyParsed = json_decode($requestBody);

    if (json_last_error() !== JSON_ERROR_NONE) {
        return response()->json([
            'err' => true,
            'message' => 'Dados enviados incorretamente',
        ], 400, true);
    }

    var_dump($bodyParsed);
});
