<?php
session_start();
include "constantes.php";
$error = 0;
if (isset($_GET["cantidad"]) && is_array($_GET["cantidad"])) {
    $cantidad=$_GET["cantidad"];
    $mysqli = conectarBD();
    if ($mysqli->connect_error == false) {
        //recorremos el array de cantidades y, a la vez, a actualizamos la base de datos
        foreach ($cantidad as $id=>$valor){
            $sql = "UPDATE carrito SET cantidad=$valor WHERE id_articulo=$id AND id_cliente=1";
            $res = $mysqli->query($sql);
            if($mysqli->error==false){
                $error = E_BD_INSTRUCCION;
            }
        }
        $mysqli->close();
    } else {
        $error = E_BD_SIN_CONEXION;
    }
}
$_SESSION["mensaje"]=$error;
header("Location:carrito.php");


?>