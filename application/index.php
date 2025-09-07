<?php

require __DIR__ . '/vendor/autoload.php';

app()->group('api', function () {
    app()->group('v1', function () {
        require_once __DIR__ . '/app/Application/Interfaces/Http/apiv1.php';
    });
});

app()->run();
