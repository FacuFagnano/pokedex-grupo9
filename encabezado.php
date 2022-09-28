<div class="w3-bar w3-black">
    <a href="index.php" class="w3-bar-item w3-button w3-margin">Pokedex<img
                src="https://images.wikidexcdn.net/mwuploads/wikidex/5/51/latest/20100906033636/Pok%C3%A9dex_RAAm.png"
                alt="pokedex" style="width:85px"></a>
    <?php
    if (isset($_SESSION["logueado"]) && $_SESSION["logueado"]) {
        $usuario = "Admin";
        echo '<form class="w3-bar-item w3-right w3-margin w3-hide-small" method="post" action="logout.php">
                <div class="w3-text-sand w3-margin-right">Usuario: ' . $usuario . '
                <input type="submit" class="w3-padding w3-margin-left w3-white w3-hover-teal w3-button w3-round-xlarge" value="Salir"></div>
              </form>';
    };
    ?>
    <?php
    if (!isset($_SESSION["logueado"])) {
        echo '<form class="w3-bar-item w3-right w3-margin w3-hide-small" method="POST" action="validar.php">
        <input type="text" id="name" name="name" class="w3-padding w3-margin-right" placeholder="Usuario">
        <input type="password" id="pass" name="pass" class="w3-padding w3-margin-right" placeholder="Password">
        <input type="submit" formmethod="post" class="w3-padding w3-margin-right w3-button w3-white w3-hover-teal w3-round-xlarge" value="Ingresar">
    </form>';};
    ?>
    <a href="javascript:void(0)" class="w3-bar-item w3-margin w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">
    <?php
    if (isset($_SESSION["logueado"]) && $_SESSION["logueado"]) {
        $usuario = "Admin";
        echo '<form class="w3-bar-item w3-right w3-black" method="post" action="logout.php">
                <div class="w3-text-sand w3-margin-right">Usuario: ' . $usuario . '
                <input type="submit" class="w3-padding w3-margin-right w3-hover-teal w3-right w3-white w3-button w3-round-xlarge" value="Salir"></div>
              </form>';
    };
    ?>
    <?php
    if (!isset($_SESSION["logueado"])) {
        echo '<form class="w3-bar-item w3-black" method="POST" action="validar.php">
        <input type="text" id="name" name="name" class="w3-padding w3-margin-right" placeholder="Usuario">
        <input type="password" id="pass" name="pass" class="w3-padding w3-margin-right" placeholder="Password">
        <input type="submit" formmethod="post" class="w3-padding w3-margin-right w3-button w3-white w3-hover-teal w3-round-xlarge" value="Ingresar">
    </form>';};
    ?>
</div>


