<?php

namespace Carlos\App\controllers;

use Carlos\App\interfaces\Buscador;
use Carlos\App\traits\Singleton;

class BuscadorController implements Buscador
{
    use Singleton;

    public function buscarDatos(array $buscadores)
    {
        foreach ($buscadores as $buscador) {
            echo $buscador->BuscarDatos();
        }
    }
}
