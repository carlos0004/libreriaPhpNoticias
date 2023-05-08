<?php 
include 'DatabaseManager.php';

$databaseManager = new DatabaseManager();
$filtro = array("id_autor" => "1",
                "id_categoria" => "6");

$databaseManager->createXml($databaseManager->getTabla("autor"), 'autores', 'autor');
$databaseManager->createXml($databaseManager->getTabla('noticia'), 'noticias', 'Noticia');
$databaseManager->createXml($databaseManager->getTabla('categoria'), 'categorias', 'Categoria');
$databaseManager->createXml($databaseManager->getTabla("autor"), 'autores', 'autor');
$databaseManager->createXml($databaseManager->getTablaF('noticia', $filtro), 'noticias', 'NoticiaId1_6');
$databaseManager->createXml($databaseManager->getTabla('categoria'), 'categorias', 'Categoria');

?>