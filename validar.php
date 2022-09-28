<?php
include_once("Database.php");
session_start();
$usuario = $_POST["name"];
$password = $_POST["pass"];
$database = new Database();

$resultados = $database->getValues('SELECT * FROM USUARIOS');


#? LOGUEO DE USUARIO.
foreach ($resultados as $resultado){
    if($resultado["USUARIO"]==$usuario && $resultado["CLAVE"]==$password){
            $_SESSION["logueado"]=1;
            header('location:index.php');
            exit();
        }
    header('location:index.php');
}









