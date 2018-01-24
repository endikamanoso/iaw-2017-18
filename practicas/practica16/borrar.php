<?php
session_start();
$error=0;
include "errores.php";
$mysqli=new mysqli("localhost","palabras",
    "12345","palabras");
if($mysqli->connect_error==false){
    $sql="DELETE FROM palabras";
    if($mysqli->query($sql)==false){
        $error=E_NO_BORRAR;
    }
    $mysqli->close();
}
else{
    $error=E_CONEXION;
}
$_SESSION["error"]=$error;
header("Location:index.php");

?>;