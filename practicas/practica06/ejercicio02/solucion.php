<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Escritura de Tabla</title>
    <style>
        .error{
            color:red;
        }
        table{
            width:100%;
        }
        td{
            border:1px solid black;
        }
    </style>

</head>
<body>
<?php
//comprobamos si la página recibe los parámetros para
//dibujar la tabla
if(isset($_GET["filas"]) && isset($_GET["columnas"])){
    $filas=$_GET["filas"];
    $columnas=$_GET["columnas"];
    if(is_numeric($filas) && is_numeric($columnas) &&
        $filas>=1 && $columnas>=1){
        //los datos son correctos, dibujamos la tabla
        echo "<table>";
        for($i=1;$i<=$filas;$i++){
            echo "<tr>";
            for($j=1;$j<=$columnas;$j++) {
                //en cada celda escribimos un espacio en blanco
                //para asegurar que se muestre
                echo "<td>&nbsp;</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "<p class='error'>Número de filas y/o columnas incorrecto</p>";
    }
}

?>
<p><a href="index.html">Volver al formulario</a></p>
</body>
</html>
