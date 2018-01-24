<?php
session_start();
include "errores.php";
if(isset($_SESSION["error"])){
    if(is_numeric($_SESSION["error"])) {
        $error = $_SESSION["error"];
    }
    unset($_SESSION["error"]);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #error{
            position:fixed;
            right:0;
            width:100%;
            height:40px;
            bottom:0;
            text-align: center;
            color:white;
            font-weight: bold;
            padding-top:20px;
            font-family: sans-serif;
        }
        .error{
            background-color:darkred ;
        }
        .correcta{
            background-color: #238f2a;
        }
    </style>
</head>
<body>
<h1>Introduzca una nueva palabra</h1>
<form action="insertar.php">
    <input type="text" placeholder="Nueva palabra" id="palabra" name="palabra">
    <button>Enviar</button>
</form>
<br><br><br>
<form action="lista.php">
    <button>Lista alfabética de palabras</button>
</form>
<br>
<form action="borrar.php">
    <button>Borrar palabras</button>
</form>
<?php
if(isset($error)){
    if($error==0){
        $texto="La acción se realizó correctamente";
        $clase="correcta";
    }
    else{
        $texto=$msg_error[$error];
        $clase="error";
    }
    /*else{
        $texto="Error grave en la gestión de la sesión: Puede haber un robo de sesión";
        $clase="error";
    }*/
    echo "<div id='error' class='$clase'>$texto</div>";
}

?>
</body>
</html>