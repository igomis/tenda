<?php
namespace modelo;
use \PDO;

class Ordenador extends EntidadBase
{
    public function __construct()
    {
        $tabla = 'ordenador';
        $indice = 'cod';
        parent::__construct($tabla, $indice);
    }
    
    public function selecciona($id)
    {
        try {
            $result = $this->ejecutaSql("SELECT ordenador.*,descripcion,PVP,nombre_corto FROM ordenador,producto WHERE ordenador.cod= '$id' AND ordenador.cod=producto.cod")
                    ->fetch(PDO::FETCH_ASSOC);
            $this->atributos = $result;
        } catch (PDOException $ex) {
            echo 'Falló la consulta: ' . $ex->getMessage();
        }
    }
}

