<?php
include_once("Database.php");
include_once('todosPokemones.php');

echo '<link href="css/estilos.css" type="text/css" rel="stylesheet">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <script src="js/funciones.js"></script>  ';

#! --------------------------- ENCABEZADO DE LA INTERFAZ ---------------------------------------
function encabezado()
{

    include_once("encabezado.php");
};

#! ------------------- CREACION DE TABLA DE POKEMONES ----------------------------------------
function crearTabla(){
    echo '<form class="busqueda" method="POST">
            <input type="text" name="busqueda" placeholder="Ingresa el tipo, numero o nombre del Pokemon">
            <button type="submit" value="save">Buscar</button>
          </form>';

    echo '
           <table>
            <thead>
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Nombre</th>';
    if (isset($_SESSION["logueado"]) && $_SESSION["logueado"]){ #? SI ESTA LOGUEADO, FIGURAN LAS ACCIONES DE MODIFICACION Y BAJA DE POKEMON.
        echo '<th scope="col">Accion</th>
               </tr>
            </thead>';
    }
        echo   '</tr>';
    if (!isset($_POST["busqueda"])){
        mostrarTodosLosPokemones(); #* botones de modificacion y baja funcionando
    }

    #? VEMOS SI SE BUSCO ALGO EN EL BUSCADOR Y EN BASE A ESO SE MODIFICA LA TABLA.
    else{
        $pokemon = $_POST["busqueda"];
        $database = new Database();
        $resultados = $database->getValues("SELECT *
FROM POKEMON
WHERE TIPO LIKE '%$pokemon%' OR NOMBRE LIKE '%$pokemon%' OR NUMERO LIKE '%$pokemon%'");

        #? SI NO SE ENCUENTRA UN POKEMON, ARROJA LEYENDA.
        if ($resultados == []){

            echo '<br>
                   <h2>Pokemon no encontrado</h2>
                  <br>';

            mostrarTodosLosPokemones();
        }
        #? SI ENCUENTRA POKEMON, QUE LO LISTEE.
        else {
            foreach ($resultados as $resultado){
                $valor_individual = $resultado["NOMBRE"];
                echo '<tr>
                <td>' . '<img src="' . "./IMG/" . $resultado["IMAGEN"] . '">' . '</td>
                <td>'. $resultado["TIPO"].'</td>
                <td>'. $resultado["NUMERO"].'</td>
                <td>'. "<a href='paginaIndividual.php?valor=$valor_individual'>" . $resultado["NOMBRE"].'</a>'.'</td>';
                echo '<a href="index.php"><button>Ir a Inicio</button></a>'; #! VER PORQUE LO PONE ARRIBA DE LA TABAL Y NO DEBAJO.

                if (isset($_SESSION["logueado"]) && $_SESSION["logueado"]){
                    echo '
                <td>
                    <button type="submit" value="save">Modificacion</button>
                    <button type="submit" value="save">Baja</button>
                </td>
              
              </tr>';

                }
            }
        }
















    }
};
?>
