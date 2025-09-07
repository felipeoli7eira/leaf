<?php

namespace App\Dominio\Modulo\Usuario\CasoDeUso;

use App\Dominio\Modulo\Usuario\Entidade\Usuario;

class Cadastro
{
    public function __construct(public readonly Usuario $usuario)
    {

    }

    public function handle()
    {

    }
}
