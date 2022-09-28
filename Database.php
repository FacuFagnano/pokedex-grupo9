<?php

class Database{

    private $conexion;

    public function __construct(){
        #* Para no pasar por parametro la conexion, se utiliza un archivo ".ini"
        $config = parse_ini_file("config.ini");
        $this->conexion = new mysqli(
            $config['host'],
            $config['user'],
            $config['pass'],
            $config['db']);
    }

    public function __destruct(){
        $this->conexion->close();
    }

    #* Esta funcion es para setear valores.
    public function setValues($sql){
        $this->conexion->query($sql); #! Por medio de la "conexion" establecemos el metodo "query" propio de php para hacer querys a mysql.
    }

    #* Esta funcion es para devolver valores.
    public function getValues($sql){
        $respuesta=$this->conexion->query($sql);
        return $respuesta ->fetch_all(MYSQLI_ASSOC); #! el "fetch_all" obtiene todas las filas en un array asociativo.
    }
}