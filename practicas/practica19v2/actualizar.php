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
            if($valor<=0) header("carrito.php");
            $sql = "UPDATE carrito SET cantidad=$valor WHERE id_articulo=$id AND id_cliente=1";
            $res = $mysqli->query($sql);
            if($mysqli->error==true){
                $error = E_BD_INSTRUCCION;
            }
        }
        $mysqli->close();
        if($error==0) $error=E_CARRITO_ACTUALIZADO;
    } else {
        $error = E_BD_SIN_CONEXION;
    }
}
$_SESSION["mensaje"]=$error;
header("Location:carrito.php");


?>