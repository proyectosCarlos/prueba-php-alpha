<?php


namespace Carlos\App\models;

use Carlos\App\config\infoDatabase;



class Connexion
{
    public static function connectar()
    {
        $dsn = "mysql:host=" . infoDatabase::$host . ";dbname=" . infoDatabase::$db . ";charset=utf8mb4";
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            return new \PDO($dsn, infoDatabase::$user, infoDatabase::$password, $options);
        } catch (\PDOException $e) {
            throw new \RuntimeException('Error de conexión: ' . $e->getMessage());
        }
    }
}
