<?php
class Articulo
{
    private $nombreProducto;
    private $precio;
    private $imagenCatalogo;
    private $imagenDescripcion;
    private $descripcion;
    private $categoria;
    private $nombreMarca;

    public function __construct()
    {
    }

    public function getnombreProducto()
    {
        return $this->nombreProducto;
    }
    public function getPrecio()
    {
        return $this->precio;
    }

    public function getImagemCatalogo()
    {
        return $this->imagenCatalogo;
    }

    public function getImagenDescripcion()
    {
        return $this->imagenDescripcion;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function getNombreMarca()
    {
        return $this->nombreMarca;
    }

    public function setDireccion($direccion)
    {
        $this->_direccion = $direccion;
    }

    public function setnombreProducto($nombreProducto)
    {

        $this->nombreProducto = $nombreProducto;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function setImagemCatalogo($imagenCatalogo)
    {
        $this->imagenCatalogo = $imagenCatalogo;
    }

    public function setImagenDescripcion($imagenDescripcion)
    {
        $this->imagenDescripcion = $imagenDescripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    public function setNombreMarca($nombreMarca)
    {
        $this->nombreMarca = $nombreMarca;
    }


}