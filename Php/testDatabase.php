<?php 
include 'DatabaseManager.php';

$databaseManager = new DatabaseManager();
$filtroNoticia = array("id_autor" => "1",
                "id_categoria" => "6");
$filtroAutor = array("nombre" => "Carlos");
$filtroCategoria = array("id_categoria" => "1");                

$databaseManager->createXml($databaseManager->getTabla("autor"), 'autores', 'autor');
$databaseManager->createXml($databaseManager->getTabla('noticia'), 'noticias', 'noticia');
$databaseManager->createXml($databaseManager->getTabla('categoria'), 'categorias', 'categoria');
$databaseManager->createXml($databaseManager->getTablaF("autor", $filtroAutor), 'autores', 'autorFiltrado');
$databaseManager->createXml($databaseManager->getTablaF('noticia', $filtroNoticia), 'noticias', 'noticiaFiltrada');
$databaseManager->createXml($databaseManager->getTablaF('categoria', $filtroCategoria), 'categorias', 'categoriaFiltrada');
?>