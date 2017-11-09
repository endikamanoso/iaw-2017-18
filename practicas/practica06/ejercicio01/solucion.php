<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Esctritura de asteriscos</title>
</head>
<body>
<?php
//comprobamos si la página recibe correctamente el
//número de asteriscos
if(isset($_GET["n"])){
    $n=$_GET["n"];
    if(is_numeric($n) && $n>=1){
        //los datos son correctos, escribimos los asteriscos
        echo "<p>";
        for($i=1;$i<=$n;$i++){
            echo "* ";
        }
        echo "</p>";
    }
    else{
        echo "<p class='error'>Número incorrecto</p>";
    }
}
?>
<p><a href="index.html">Volver a escribir asteriscos</a></p>
</body>
</html>

