<?php

namespace modelo;

use \PDO;

class Conectar
{

    private $driver;
    private $host, $user, $pass, $database, $charset;

    public function __construct()
    {
        require 'config/database.php';
        $this->driver = $db_cfg["driver"];
        $this->host = $db_cfg["host"];
        $this->user = $db_cfg["user"];
        $this->pass = $db_cfg["pass"];
        $this->database = $db_cfg["database"];
        $this->charset = $db_cfg["charset"];
    }

    public function conexion()
    {
        try {
            $conn = new PDO("$this->driver:host=$this->host;dbname=$this->database", $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->query("SET NAMES '$this->charset'");
            return $conn;
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }
}
