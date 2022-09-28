<?php
include_once ("implementation.php");
session_start();
encabezado();


#! ------------------- VARIABLES -------------------
$new_name= $_POST["nombre"];
$new_type= $_POST["tipo"];
$new_number= $_POST["numero"];
$id = $_POST["id_pokemon"];

$database = new Database();

#? VERIFICAR SI EL NOMBRE Y EL NUMERO NO ESTAN YA EN LA BD.
$search_query = "SELECT POKEMON.NOMBRE
FROM POKEMON
WHERE NOMBRE LIKE '%$new_name%' OR NUMERO LIKE '%$new_number%'";

$name_in_db = $database->getValues($search_query);


if ($name_in_db != []){
    echo "No se pudo modificar el pokemon porque ya existe uno con ese nombre y/o numero";
}else{
    $modification_query = "UPDATE POKEMON
           SET NUMERO='$new_number', NOMBRE='$new_name', TIPO='$new_type'
           WHERE ID_POKEMON = '$id'";
    $database->setValues($modification_query);
    echo '<h2>El Pokemon ha sido modificado con exito!</h2>';
}

echo '<a href="index.php"><button>Ir a Inicio</button></a>';