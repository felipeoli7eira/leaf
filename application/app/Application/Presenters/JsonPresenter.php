<?php

declare(strict_types=1);

namespace App\Application\Presenters;

use App\Contracts\PresenterInterface;

final class JsonPresenter implements PresenterInterface
{
    private mixed $data;

    public function __construct() {}

    public function setData(mixed $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function present(): mixed
    {
        return response()->json(
            data: $this->data,
            showCode: true
        );
    }
}
