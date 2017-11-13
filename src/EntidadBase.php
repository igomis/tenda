<?php

namespace modelo;
use \PDO;

abstract class EntidadBase
{

    protected $tabla;
    protected $indice;
    protected $atributos = [];

    protected static function ejecutaSql($sql)
    {
        //require_once 'Conectar.php';
        $db = new Conectar();
        $conn = $db->conexion();

        try {
            return ($conn->query($sql));
        } catch (Exception $ex) {
            echo 'Falló la consulta: ' . $ex->getMessage();
        }
    }

    public function __construct($tabla = null, $indice = null)
    {
        //nombre de la tabla por defecto
        if ($tabla == null) {
            $this->tabla = str_replace("modelo\\", "", strtolower(get_class($this))) . 's';
        } else {
            $this->tabla = $tabla;
        }
        //indice por defecto
        if ($indice == null) {
            $this->indice = 'id';
        } else {
            $this->indice = $indice;
        }
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->atributos)) {
            return ($this->atributos[$name]);
        }
    }

    public function __set($name, $value)
    {
        $this->atributos[$name] = $value;
    }

    public function selecciona($id)
    {
        try {
            $result = $this->ejecutaSql("SELECT * FROM $this->tabla WHERE $this->indice = '$id'")
                    ->fetch(PDO::FETCH_ASSOC);
            $this->atributos = $result;
        } catch (PDOException $ex) {
            echo 'Falló la consulta: ' . $ex->getMessage();
        }
    }

    public function guarda()
    {
        $sql = "UPDATE $this->tabla SET ";
        foreach ($this->atributos as $key => $value) {
            if ($key != $this->indice) {
                $sql .= "$key = '$value',";
            } else
                $id = $value;
        }
        return($this->ejecutaSql(trim($sql, ',') . "WHERE $this->indice = '$id'"));
    }

    public function crea()
    {
        $sql = "INSERT INTO $this->tabla (";
        $sql2 = " VALUES (";
        foreach ($this->atributos as $key => $value) {
            $sql .= "$key,";
            $sql2 .= "'$value',";
        }
        return($this->ejecutaSql(trim($sql, ',') . ")" . trim($sql2, ',') . ")"));
    }

    public function vacia()
    {
        $this->atributos = [];
    }
//    public static function getAll()
//    {
//        return self::ejecutaSql("SELECT * FROM $this->tabla ORDER BY $this->indice")
//                        ->fetchAll();
//    }
//
//    public function getbyId($id)
//    {
//        return self::ejecutaSql("SELECT * FROM $this->tabla WHERE $this->indice = '$id'")
//                        ->fetch();
//    }
//
//    public function getbyColum($columna, $valor)
//    {
//        return self::ejecutaSql("SELECT * FROM $this->tabla WHERE $columna = '$valor'");
//    }
//
//    public function deletebyId($id)
//    {
//        return self::ejecutaSql("DELETE FROM $this->tabla WHERE $this->indice = '$id'");
//    }
//
//    public function deleteAll($id)
//    {
//        return self::ejecutaSql("DELETE FROM $this->tabla");
//    }
//
//    public function deleteByColum($columna, $valor)
//    {
//        return self::ejecutaSql("DELETE FROM $this->tabla WHERE $columna = '$valor'");
//    }
}
