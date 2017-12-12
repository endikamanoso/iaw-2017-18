<?php
$paso=false;
if(isset($_GET["usuario"]) && isset($_GET["pass"])){
    $usuario=$_GET["usuario"];
    $pass=$_GET["pass"];
    if($usuario=="Jorge" && $pass=="12345"){
        $paso=true;
    }
}

if($paso==false) header("Location:sal.php");
?>