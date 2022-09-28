<?php

include_once("Implementation.php");
include_once ("Database.php");
session_start();
encabezado();
$pokemon_a_mostrar = $_GET["valor"]; #? Traemos de la URL el pokemon a detallar.

$database = new Database();
$resultados = $database->getValues("SELECT *
FROM POKEMON
WHERE TIPO LIKE '%$pokemon_a_mostrar%' OR NOMBRE LIKE '%$pokemon_a_mostrar%' OR NUMERO LIKE '%$pokemon_a_mostrar%'");

#! HACER VALIDACION CON IF DE TIPO DE POKEMONES.
foreach ($resultados as $resultado){
    echo '<tr>
                <td>' . '<img src="' . $resultado["IMAGEN"] . '" width="200px">' . '</td><br><br>
                <td>' . "Tipo: " . '<img src="' . "./IMG/tipos/" . $resultado["TIPO"] . '.png" width="75px">' . '</td><br><br>
                <td>'. "Numero: " . $resultado["NUMERO"].'</td><br>
                <td>'. "Nombre: " . $resultado["NOMBRE"].'</td><br>
                <td>'. "Descripcion: " . $resultado["DESCRIPCION"].'</td><br>
    </tr>';

    echo '<br><br>
          <a href="index.php"><button>Ir a Inicio</button></a>';
}



