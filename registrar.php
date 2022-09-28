<?php
include_once("Database.php");
echo "Estoy registrandome"."<br>";

$database = new Database();

echo '<html>
<form method="POST" action="registro_ok.php">
    <label for="nombre">Nombre</label>
    <input id="nombre" type="text" name="nombre">
    <br>
    <label for="apellido">Apellido</label>
    <input id="apellido" type="text" name="apellido">
    <br>
    <label for="name">Usuario</label>
    <input id="name" type="text" name="name">
    <br>
    <label for="pass">Password</label>
    <input id="pass" type="password" name="pass">
    <br>
    <button type="submit" value="save">Registrar</button>
</html>';

/*$resultados= $database->query('SELECT * FROM USUARIOS');

foreach($resultados as $resultado){
    echo "id:" . $resultado["ID_USUARIO"]. "<br>";
    echo "Descripcion:" . $resultado["NOMBRE"]. "<br>";
    echo "Direccion:" . $resultado["APELLIDO"]. "<br>";
    echo "Descripcion:" . $resultado["USUARIO"]. "<br>";
    echo "Descripcion:" . $resultado["CLAVE"]. "<br><br>";
}*/