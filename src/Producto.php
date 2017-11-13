<?php
namespace modelo;

class Producto extends EntidadBase
{
    public function __construct()
    {
        $tabla = "producto";
        $indice = "cod" ;
        parent::__construct($tabla, $indice);
    }
    public static function obtieneProductos()
    {
        $rows = self::ejecutaSql("SELECT * FROM producto");
        $productos = array();
        foreach ($rows as $row) {
            $p1 = new Producto();
            $p1->selecciona($row['cod']);
            $productos[] = $p1;
        }
        return $productos;
    }
}

