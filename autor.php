<?php 
class Autor{
    private $idAutor;
    private $nombre;
    private $apellido;


    public function __construct($idAutor, $nombre, $apellido)
    {
        $this->idAutor = $idAutor;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    /**
     * Get the value of idAutor
     */ 
    public function getIdAutor()
    {
        return $this->idAutor;
    }

    /**
     * Set the value of idAutor
     *
     * @return  self
     */ 
    public function setIdAutor($idAutor)
    {
        $this->idAutor = $idAutor;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
}

?>