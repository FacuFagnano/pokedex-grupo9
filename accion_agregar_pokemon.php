<?php


include_once("implementation.php");
session_start();
encabezado();
#! SI LE PONGO METODO POST NO LO ENCUENTRA. YA SE INTENTO PONIENDO FORMULARIO CON METODO POST TANTO EN EL ACCION_BAJA COMO EN ACCION_MODIFICACION



echo '
       <form class="modificacion" method="POST" action="agregar_pokemon.php" enctype="multipart/form-data">
           <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">
                <br>
            <label for="tipoNuevo">Tipo:</label>
                <select name="tipoNuevo" class="form-control my-2">
                            <option value="Default" selected hidden>Seleccionar un tipo</option>
                            <option value="acero">Acero</option>
                            <option value="agua">Agua</option>
                            <option value="bicho">Bicho</option>
                            <option value="dragon">Dragón</option>
                            <option value="electrico">Eléctrico</option>
                            <option value="fantasma">Fantasma</option>
                            <option value="fuego">Fuego</option>
                            <option value="hada">Hada</option>
                            <option value="hielo">Hielo</option>
                            <option value="lucha">Lucha</option>
                            <option value="normal">Normal</option>
                            <option value="planta">Planta</option>
                            <option value="psiquico">Psíquico</option>
                            <option value="roca">Roca</option>
                            <option value="siniestro">Siniestro</option>
                            <option value="tierra">Tierra</option>
                            <option value="veneno">Veneno</option>
                            <option value="volador">Volador</option>                            
                </select>
                <br>
            <label for="numero">Numero:</label>
                <input type="text" name="numero" id="numero" placeholder="Ingrese numero">
                <br>
            <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen">
                <br>
            <label for="descripcion">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion">
                <br>

            <a href="agregar_pokemon.php"><button type="submit" value="save" formmethod="POST">Agregar</button></a>
       </form>';
//
