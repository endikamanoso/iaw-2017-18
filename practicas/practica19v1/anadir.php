<?php
session_start();
include "errores.php";
$error = 0;
if (isset($_GET["id_articulo"]) && is_numeric($_GET["id_articulo"])) {
    $id_articulo = $_GET["id_articulo"];
    $mysqli = new mysqli("localhost", "tienda", "12345", "tienda");

    if ($mysqli->connect_error == false) {
        //buscamos si el artículo ya está en el carrito
        $sql = "SELECT * FROM carrito WHERE id_articulo=$id_articulo AND id_cliente=1";
        $res = $mysqli->query($sql);
        if ($mysqli->error == false) {
            if ($res->num_rows == 0) {
                //es la primera vez que añadimos el artículo
                $sql = "INSERT INTO carrito(id_articulo,id_cliente,cantidad) VALUES ($id_articulo,1,1)";
            } else {
                //ya existe ese artículo en el carrito
                $sql = "UPDATE carrito SET cantidad=cantidad+1 WHERE id_articulo=$id_articulo AND id_cliente=1";
            }
            $res = $mysqli->query($sql);
            echo $sql;
            if ($mysqli->error == false) {
                $error = E_ARTICULO_ANADIDO;
            } else {
                $error = E_BD_INSTRUCCION;
                echo $mysqli->error;
            }
        } else {
            $error = E_BD_INSTRUCCION;
        }
        $mysqli->close();
    } else {
        $error = E_BD_SIN_CONEXION;
    }
}
$_SESSION["mensaje"]=$error;
header("Location:index.php");


?>