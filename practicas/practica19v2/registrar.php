<?php
session_start();
include "constantes.php";
$error = 0;
if (isset($_GET["nombre"]) && isset($_GET["apellido1"]) && isset($_GET["usuario"]) && isset($_GET["password"]) && isset($_GET["password2"]) && strlen($_GET["nombre"])>0 && strlen($_GET["apellido1"])>0&& strlen($_GET["usuario"])>0 && strlen($_GET["password"])>0 && strlen($_GET["password2"])>0) {
    $nombre=$_GET["nombre"];
    $apellido1=$_GET["apellido1"];
    $usuario=$_GET["usuario"];
    $password=$_GET["password"];
    $password2=$_GET["password2"];
    if(isset($_GET["apellido2"]) && strlen($_GET["apellido2"])>0)
        $apellido2=$_GET["apellido2"];
    else $apellido2=null;

    if(strlen($password)<6) $error=E_PASSWORD_NO_VALIDA;
    elseif($password!=$password2) $error=E_PASSWORD_NO_COINCIDE;
    if($error==0) {
        $mysqli = conectarBD();

        if ($mysqli->connect_error == false) {
            $sql = "INSERT INTO clientes(nombre,apellido1,apellido2,usuario,password) VALUES(?,?,?,?,?)";
            $st= $mysqli->prepare($sql);
            $st->bind_param("sssss",$nombre,$apellido1,$apellido2,$usuario,$password);
            $st->execute();
            $st->close();

            if ($mysqli->error) {
                $error = E_BD_INSTRUCCION;
                //echo $mysqli->error;
            }
            else {
                $error = E_USUARIO_ANADIDO;
            }
            $mysqli->close();
        } else {
            $error = E_BD_SIN_CONEXION;
        }
    }
}
else{
    $error=E_FALTAN_DATOS;
}
$_SESSION["mensaje"]=$error;
header("Location:registro.php");


?>