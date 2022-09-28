<?php
session_start();
session_destroy();

echo "Cerro la sesion.";
header("location:index.php");
exit();