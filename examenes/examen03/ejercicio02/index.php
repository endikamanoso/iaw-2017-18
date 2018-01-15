<?php
session_start();
if(isset($_SESSION["tiempo"])){
    $tiempo=$_SESSION["tiempo"];
    if(time()>$tiempo+10) header("Location:adios.html");
}
else{
    $tiempo=time();
    $_SESSION["tiempo"]=$tiempo;
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
</head>
<body>
<h1 id="titulo">Bienvenido</h1>
<p>Tiempo restante: <strong><?=$tiempo+10-time()?></strong></p>
<script>
    window.onload=function(){
        setInterval(function(){location="index.php"},1000);
    }
</script>
</body>
</html>