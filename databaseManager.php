<?php
include 'databaseConnection.php';
include 'conversor.php';

function getTablaF($tabla, $columna, $filtro){
    $database=connection();
    $sentencia= $database->query("SELECT * FROM `$tabla` WHERE $columna = '$filtro'");
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //return "SELECT * FROM $tabla WHERE $columna = $filtro";
}

function getTabla($tabla){
    $database=connection();
    $sentencia= $database->query("SELECT * FROM `$tabla`");
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //return "SELECT * FROM `$tabla`";
}
//createXml(getTabla('autor'), 'autores', 'tesssfst');
//print_r(getTablaF('autor', 'nombre', 'Carlos'));
//print_r(getTabla('autor'));
createXml(getTabla('autor'), 'autores', 'Autor');
createXml(getTabla('noticia'), 'noticias', 'Noticia');
createXml(getTabla('categoria'), 'categorias', 'Categoria');

//createXml(getTablaF('autor', 'nombre', 'Carlos'), 'autores', 'AutorCarlos');



