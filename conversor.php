<?php
function createXml($lista, $tabla, $nombreArchivo)
{
    if ($tabla=='autores' || $tabla=='noticias' || $tabla=='categorias') {
        if ($tabla=='autores') {
            $child='autor';
    
        } elseif ($tabla=='noticias') {
            $child='noticia';
    
        } elseif ($tabla=='categorias') {
            $child='categoria';
    
        }
        $xmlDoc = new DOMDocument('1.0', 'UTF-8');
        $xmlDoc->formatOutput = true;
        $root = $xmlDoc->appendChild($xmlDoc->createElement($tabla));
        foreach ($lista as $user) {
            if (!empty($user)) {
                $childElement = $root->appendChild($xmlDoc->createElement($child));
                foreach ($user as $key => $val) {
                    $childElement->appendChild($xmlDoc->createElement($key, $val));
                }
            }
        }
        echo 'Archivo creado correctamente';
        return $xmlDoc->save($nombreArchivo . ".xml");
    
    }else{
        echo 'No existe esa tabla';
    }
}

