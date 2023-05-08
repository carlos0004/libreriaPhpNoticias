<?php 
include 'databaseConnection.php';
/**
 * Clase para realizar las operaciones con la base de datos
 * @author carlos
 * @version 1.0
 */
class DatabaseManager{
    private $conexion;
    public function __construct()
    {
        $this->conexion = connection();
    }

    //filtro para consultar datos

/**
 * Funcion para consultar una tabla devolviendo un array
 *  @param $tabla nombre de la tabla que queremos consultar
 */
public function getTabla($tabla){
    $database=$this->conexion;
    $sentencia= $database->query("SELECT * FROM `$tabla`");
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //return "SELECT * FROM `$tabla`";
}

/**
 * funcion que realiza una consulta filtrando por lo que le indiquemos en el filtro,
 * devuelve un arry de esa consulta
 * @param $tabla nombre de la tabla que queremos consultar
 * @param $filtro que queremos aplicarle
 */
function getTablaF($tabla,  $filtro){
    $database=$this->conexion;
    $tSql= "SELECT * FROM $tabla where ";
    foreach ($filtro as $key => $value) {
        $tSql .= $key ." = '" . $value . "' AND ";
    }
    $tSql=substr($tSql, 0, strlen($tSql)-4);
    $sentencia= $database->query($tSql);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Funcion para crear un archivo xml a partir de un array
 * @param $lista lista con todos los registros de cierta tabla 
 * que queremos convertir a xml~
 * @param $tabla tabla sobre la que quermos generar el archivo xml
 * @param $nombreArchivo asigna un nombre al archivo generado.
 */
function createXml($lista, $tabla, $nombreArchivo)
{
    if ($tabla == 'autores' || $tabla == 'noticias' || $tabla == 'categorias') {
        if ($tabla == 'autores') {
            $child = 'autor';
        } elseif ($tabla == 'noticias') {
            $child = 'noticia';
        } elseif ($tabla == 'categorias') {
            $child = 'categoria';
        }
        $xmlDoc = new DOMDocument('1.0', 'UTF-8');
        $xmlDoc->formatOutput = true;
        $root = $xmlDoc->appendChild($xmlDoc->createElement($tabla));
        foreach ($lista as $row) {
            if (!empty($row)) {
                $childElement = $root->appendChild($xmlDoc->createElement($child));
                foreach ($row as $key => $val) {
                    $childElement->appendChild($xmlDoc->createElement($key, $val));
                }
            }
        }
        echo 'Archivo creado correctamente' . "<br>";
        return $xmlDoc->save("../xml/" . $nombreArchivo . ".xml");
    } else {
        echo 'No existe esa tabla' . "<br>";
    }
}

/**
 * Funcion para registrar los datos de autor desde un archivoxml
 * @param $file Archivo xml
 */
function xmlAutorToSql($file)
{
    $database = connection();
    $xml = simplexml_load_file($file);
    foreach ($xml as $fila) {
        $stmt = $database->prepare('insert into
			autor(id_autor, nombre, apellido)
			values(:id_autor, :nombre, :apellido)');
        $stmt->bindValue('id_autor', $fila->id_autor);
        $stmt->bindValue('nombre', $fila->nombre);
        $stmt->bindValue('apellido', $fila->apellido);
        $stmt->execute();
    }
}

/**
 * Funcion para registrar los datos de noticia desde un archivoxml
 * @param $file Archivo xml
 */
function xmlNoticiaToSql($file)
{
    $database=$this->conexion;
    $xml = simplexml_load_file($file);
    foreach ($xml as $fila) {
        $stmt = $database->prepare('insert into
			noticia(id_noticia, titulo, contenido, descripcion, id_autor, id_categoria)
			values(:id_noticia, :titulo, :contenido, :descripcion, :id_autor, :id_categoria)');
        $stmt->bindValue('id_noticia', $fila->id_noticia);
        $stmt->bindValue('titulo', $fila->titulo);
        $stmt->bindValue('contenido', $fila->contenido);
        $stmt->bindValue('descripcion', $fila->descripcion);
        $stmt->bindValue('id_autor', $fila->id_autor);
        $stmt->bindValue('id_categoria', $fila->id_categoria);
        $stmt->execute();
    }
}

/**
 * Funcion para registrar los datos de categoria desde un archivoxml
 * @param $file Archivo xml
 */
function xmlCategoriaToSql($file)
{
    $database=$this->conexion;
    $xml = simplexml_load_file($file);
    foreach ($xml as $fila) {
        $stmt = $database->prepare('insert into
			categoria(id_categoria, denominacion)
			values(:id_categoria, :denominacion)');
        $stmt->bindValue('id_categoria', $fila->id_categoria);
        $stmt->bindValue('denominacion', $fila->denominacion);
        $stmt->execute();
    }
}
}
?>