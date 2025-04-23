<?php

namespace Carlos\App\traits;

trait Singleton
{
    private static $instance = null;
    public static function obtenerIntancia()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
