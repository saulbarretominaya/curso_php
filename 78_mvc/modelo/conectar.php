<?php


class conectar
{

    public static function conexion()
    {
        try {

            $conexion = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
        } catch (Exception $e) {
            echo "El error esta en la linea: " . $e->getLine();
        }

        return $conexion;
    }
}
