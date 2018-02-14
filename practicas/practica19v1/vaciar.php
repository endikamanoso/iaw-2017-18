<?php
session_start();
include "errores.php";
$mysqli = new mysqli("localhost", "tienda", "12345", "tienda");

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