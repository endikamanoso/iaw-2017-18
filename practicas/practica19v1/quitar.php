<?php
session_start();
include "errores.php";
if (isset($_GET["id_articulo"]) && is_numeric($_GET["id_articulo"])) {
    $id_articulo=$_GET["id_articulo"];
    $mysqli = new mysqli("localhost", "tienda", "12345", "tienda");
    if($mysqli->connect_error==false){
        $sql="DELETE FROM carrito WHERE id_cliente=1 AND id_articulo=$id_articulo";
        $res=$mysqli->query($sql);
        if($mysqli->error==false){
            header("Location:carrito.php");
        }
        else{
            echo $mysqli->error;
        }
    }
    else{
        echo $mysqli->connect_error;
    }
}
else{
    header("Location:carrito.php");
}


?>