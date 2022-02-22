<?php
class Categoria{

    private $nombreCategoria;

    public function __construct()
    {
    }

    public function getnombreCategoria()
    {
        return $this->nombreCategoria;
    }


    public function setNombreMarca($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;
    }



}
