<?php
include_once ("implementation.php");
include_once ("Database.php");
session_start();
encabezado();

$database = new Database();

$nombre = $_POST["nombre"];
$tipo = $_POST["tipoNuevo"];
$numero = $_POST["numero"];
$imagen = $_FILES["imagen"];
$descripcion = $_POST["descripcion"];

$rutaArchivoTemporal = $_FILES["imagen"]["tmp_name"];
$rutaArchivoFinal = "img/pokemon/" . $_POST["nombre"] . ".jpeg";
move_uploaded_file($rutaArchivoTemporal, $rutaArchivoFinal);

$sql_get = "SELECT *
    FROM POKEMON
WHERE NOMBRE LIKE '%$nombre%' OR NUMERO LIKE '%$numero%'";


$name_in_db = $database->getValues($sql_get);
echo '<br>';
var_dump($name_in_db);

$sql = "INSERT INTO POKEMON (NUMERO, IMAGEN, NOMBRE, TIPO, DESCRIPCION) VALUES
('$numero','$rutaArchivoFinal','$nombre','$tipo','$descripcion')";

if ($name_in_db == []){
    $database->setValues($sql);
}else{
    echo '<h2>El pokemon ya se encuentra en la base de datos.</h2>';
}

echo '<a href="index.php"><button>Ir a Inicio</button></a>';



