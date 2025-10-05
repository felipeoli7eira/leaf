<?php

require __DIR__ . '/vendor/autoload.php';

app()->group('api', function () {
    require __DIR__ . '/app/Interface/Http/Api.php';
});

app()->run();
