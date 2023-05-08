<?php
/*Realizo la conexión con la base de datos a traves de una funcion.
Cuando quiera conectarme con la base de datos tendré que utilizarla*/
function connection()
{
    try {
        $conexion = new PDO("mysql:host=127.0.0.1;dbname=foro", "root", "");
    } catch (PDOException $e) {
        $conexion = $e->getMessage();
    }
    return $conexion;
}
?>