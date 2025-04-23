<?php

namespace Carlos\App;


use Carlos\App\controllers\BuscadorController;
use Carlos\App\models\Clase;
use Carlos\App\models\Examen;


if ($argc < 3 || $argv[1] !== 'search') {
    echo "Uso: php main.php search <palabra para busqueda>\n";
    exit(1);
}

$busqueda = strtolower($argv[2]);

if (strlen($busqueda) < 3) {
    echo "Por favor, ingresa por lo menos 3 caracteres para iniciar la busqueda\n";
    exit();
}

$buscadores = [
    new Clase($busqueda),
    new Examen($busqueda)
];

$buscador = BuscadorController::obtenerIntancia();

echo $buscador->buscarDatos($buscadores);
