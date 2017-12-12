<?php
$paso=false;
if(isset($_POST["usuario"]) && isset($_POST["pass"])){
    $usuario=$_POST["usuario"];
    $pass=$_POST["pass"];
    if($usuario=="Jorge" && $pass=="12345"){
        $paso=true;
    }
}

if($paso==false) header("Location:sal.php");
?>