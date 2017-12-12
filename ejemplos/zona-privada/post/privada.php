<?php
    include "control.php";
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
        button{
            background-color:transparent;
            border:none;
            outline: none;
            color:blue;
            text-decoration: underline;
            cursor:pointer;
        }
    </style>
</head>
<body>
<h1>¡¡ZONA PRIVADA!!</h1>
<form action="muro.php" method="post">
    <input type="text" id="usuario" name="usuario" value="Jorge" hidden> <br>
    <input type="password" id="pass" name="pass" value="12345" hidden> <br>
    <button>Ir a mi muro</button>
</form>
</body>
</html>