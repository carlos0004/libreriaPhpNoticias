<?php
class Noticia {
    private $id;
    private $titulo;
    private $contenido;
    private $descripcion;
    private $idAutor;
    private $idCategoria;

    public function __construct($id, $titulo, $descripcion, $idAutor, $idCategoria)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->idAutor = $idAutor;
        $this->idCategoria = $idCategoria;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of contenido
     */ 
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set the value of contenido
     *
     * @return  self
     */ 
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
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
     * Get the value of idCategoria
     */ 
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     *
     * @return  self
     */ 
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }
} 
?>