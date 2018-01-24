<?php
session_start();
include "errores.php";

//Si no se ha recibido ninguna palabra, regresamos al formulario
if(!isset($_GET["palabra"])) {
    header("Location:index.php");
}
else {
    $palabra = trim($_GET["palabra"]);
    if(strlen($palabra)==0 || preg_match("/^\s+$/",$palabra)){
        $error=E_NO_PALABRA;
    }
    else{
        $error=0;
        $mysqli=new mysqli("localhost","palabras",
            "12345","palabras");
        if($mysqli->connect_error==false){
            $sql="INSERT INTO palabras VALUES('$palabra')";
            if($mysqli->query($sql)==false){
                if($mysqli->errno==1062)
                    $error=E_REPETIDA;
                else
                    $error=E_INSTRUCCION;
            }
            $mysqli->close();
        }
        else{
            $error=E_CONEXION;
        }
    }
    $_SESSION["error"]=$error;
    header("Location:index.php");
}





?>