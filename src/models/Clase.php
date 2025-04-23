<?php

namespace Carlos\App\models;

use Carlos\App\models\abstracts\Recurso;

use Carlos\App\models\Connexion;

class Clase extends Recurso
{
    private $palabraBusqueda;

    private $conexion;
    public function __construct($palabraBusqueda)
    {
        $this->palabraBusqueda = $palabraBusqueda;
        $this->conexion = Connexion::connectar();
    }

    public function buscarDatos()
    {
        $query = "SELECT nombre, calificacion FROM clase WHERE nombre LIKE :palabraBusqueda";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindValue(':palabraBusqueda', '%' . $this->palabraBusqueda . '%', \PDO::PARAM_STR);

        $stmt->execute();
        $resultados = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if ($resultados) {

            foreach ($resultados as $resultado) {
                echo 'Clase: ' . $resultado['nombre'] . '|' . $resultado['calificacion'] . '/5' . "\n";
            }
        }
    }
}
