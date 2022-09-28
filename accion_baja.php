<?php
include_once ("implementation.php");
encabezado();

$pokemon_a_eliminar = $_GET["valor"];

$database = new Database();

$database->setValues("DELETE FROM POKEMON
WHERE NOMBRE LIKE '%$pokemon_a_eliminar%'");

echo '<h2> EL POKEMON ' . $pokemon_a_eliminar . ' HA SIDO ELIMINADO</h2>';
echo '<a href="index.php"><button>Ir a Inicio</button></a>';
