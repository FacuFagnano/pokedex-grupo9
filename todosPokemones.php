<?php
include_once ('Database.php');
function mostrarTodosLosPokemones()
{
    $database = new Database();
    $resultados = $database->getValues('SELECT * FROM POKEMON');

    foreach ($resultados as $resultado) {
        $imagen = $resultado["IMAGEN"];
        $nombre_individual = $resultado["NOMBRE"];
        $tipo_individual = $resultado["TIPO"];
        $numero_individual = $resultado["NUMERO"];
        $id = $resultado["ID_POKEMON"];

        echo '<tr>
                <td>' . '<img src="' . $imagen . '" width="75px">' . '</td>
                <td>' . '<img src="' . "IMG/tipos/" . $tipo_individual . '.png" width="45px">' . '</td>
                <td>' . $resultado["NUMERO"] . '</td>
                <td>' . "<a href='paginaIndividual.php?valor=$nombre_individual'>" . $resultado["NOMBRE"] . '</a>' . '</td>';
        #? Aca pasamos en el href el valor del pokemon para hacer la query.
        if (isset($_SESSION["logueado"]) && $_SESSION["logueado"]) {
            echo '
                <td>
                    <a href="accion_modificacion.php?id=' . $id . '&old_name=' . $nombre_individual . '&old_type=' . $tipo_individual . '&old_number=' . $numero_individual . '"><button type="submit" value="save">Modificacion</button></a>
                    
                    <a href="accion_baja.php?valor=' . "$nombre_individual" . '"><button type="submit" value="save">Baja</button></a>
          
                    
                </td>
              
              </tr>';

        }

    }
    if (isset($_SESSION["logueado"]) && $_SESSION["logueado"]) {
        echo '<a href="accion_agregar_pokemon.php"><button type="submit" value="save">Agregar</button></a>';
    }
}


