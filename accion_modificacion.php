<?php
include_once ("implementation.php");
include_once ("Database.php");
session_start();
encabezado();
$database = new Database();

#! SI LE PONGO METODO POST NO LO ENCUENTRA. YA SE INTENTO PONIENDO FORMULARIO CON METODO POST TANTO EN EL ACCION_BAJA COMO EN ACCION_MODIFICACION

#? VALORES QUE YA TENGO EN MI BASE DE DATOS.
$new_name=$_GET["old_name"];
$new_type=$_GET["old_type"];
$new_number=$_GET["old_number"];
$id=$_GET["id"];

echo '
       <form class="modificacion" method="POST" action="modificacion.php">
           <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="' . $new_name . '">
                <br>
            <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" id="tipo" placeholder="' . $new_type . '">
                <br>
            <label for="numero">Numero:</label>
                <input type="text" name="numero" id="numero" placeholder="' . $new_number . '">
                <br>
            <label for="id_pokemon"></label>
                <input type="hidden" name="id_pokemon" id="id_pokemon" value="' . $id . '">
            <a href="modificacion.php"><button type="submit" value="save" formmethod="POST">Modificar</button></a>
       </form>';
//
