<?php

namespace Carlos\App\models;

use Carlos\App\models\abstracts\Recurso;
use Carlos\App\models\Connexion;

class Examen extends Recurso
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
        $query = "select nombre, te.descripcion from examen e
                  inner join tipo_examen te on te.tipo_examen_id = e.id_tipo_examen 
                WHERE nombre LIKE :palabraBusqueda";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindValue(':palabraBusqueda', '%' . $this->palabraBusqueda . '%', \PDO::PARAM_STR);

        $stmt->execute();
        $resultados = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if ($resultados) {

            foreach ($resultados as $resultado) {
                echo 'Examen: ' . $resultado['nombre'] . '|' . $resultado['descripcion'] . "\n";
            }
        }
    }
}
