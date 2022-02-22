<?php
class Marca{
    private $nombreMarca;

    public function __construct()
    {
    }

    public function getnombreMarca()
    {
        return $this->nombreMarca;
    }


    public function setNombreMarca($nombreMarca)
    {
        $this->nombreMarca = $nombreMarca;
    }

}