<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sanchez">
    <title>Tabla ASCII 5 columnas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
<header class="jumbotro">
    <h1>Tabla ASCII</h1>
</header>
<table class="table table-striped table-bordered" >

<?php
    //primera fila
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    for($i=1;$i<=5;$i++){
        echo "<th scope='col'>Código</th><th scope='col'>Valor</th>";
    }
    echo "</tr>";
    echo "</thead>";
    //resto de filas
    echo "<tbody>";
    //escribo 26 filas, resultado de 128/5 redondeado
    //128 es el tamaño de la tabla ASCII completa y 5
    //son los códigos que se muestran en cada fila
    $codigo=0;
    for($i=1;$i<=26;$i++){
        echo "<tr>";
        for($j=1;$j<=5;$j++) {
            echo "<td class='table-active'>$codigo</td><td>" . chr($codigo) . "</td>";
            $codigo++;
            if($codigo==128) break;
        }
        echo "</tr>";
    }
    echo "</tr>";
    echo "</tbody>";
?>
</table>
<?php
    echo "<"
?>
</body>
</html>