<?php

namespace App\Dominio\Modulo\Usuario\Entidade;

class Usuario
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        public string $created_at,
        public string $updated_at,
        public string $deleted_at,
    ) {}
}
