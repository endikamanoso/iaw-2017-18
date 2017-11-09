<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sanchez">
    <title>Tabla ASCII 5 columnas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
<table class="table table-striped table-bordered" >

<?php
    //primera fila
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    for($i=1;$i<=8;$i++){
        echo "<th scope='col'>Código</th><th scope='col'>Valor</th>";
    }
    echo "</tr>";
    echo "</thead>";
    //resto de filas
    echo "<tbody>";
    echo "<tr>";
    for($i=1;$i<=127;$i++){
        echo "<td class='table-active'>$i</td><td>".chr($i)."</td>";
        if($i%8==0) echo "</tr><tr>";
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