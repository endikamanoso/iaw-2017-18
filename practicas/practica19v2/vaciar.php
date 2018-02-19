<?php
session_start();
include "constantes.php";
$mysqli = conectarBD();

if ($mysqli->connect_error == false) {
    $sql = "DELETE FROM carrito WHERE id_cliente=1";
    $res = $mysqli->query($sql);
    if ($mysqli->error) echo $mysqli->error;
    else {
        $mysqli->close();
        header("Location:carrito.php");

    }
}


?>