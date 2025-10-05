<?php

namespace App\Contracts;

interface PresenterInterface
{
    public function setData(mixed $data): self;
    public function present(): mixed;
}
