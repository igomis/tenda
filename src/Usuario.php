<?php
namespace modelo;

class Usuario extends EntidadBase
{
    protected $indice = 'usuario';
    
    public static function verificaCliente($nombre, $contrasena)
    {
        $sql = "SELECT usuario FROM usuarios ";
        $sql .= "WHERE usuario='$nombre' ";
        $sql .= "AND contrasena='" . md5($contrasena) . "';";
        $resultado = self::ejecutaSql($sql);
        $verificado = false;

        if (isset($resultado)) {
            $fila = $resultado->fetch();
            if ($fila !== false)
                $verificado = true;
        }
        return $verificado;
    }
}

