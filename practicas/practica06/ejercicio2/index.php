<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sanchez">
    <title>Tabla Unicode 5 columnas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
    <?php
    //primera fila
    echo "<thead class='thead-dark'>";
    echo "<tr>";
        for($i=1;$i<=5;$i++){
        echo "<th scope='col'>Código</th><th scope='col'>Valor</th>";
        }
        echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    for($i=1,$col=1;$i<=50000;$i++,$col++){
        if($col==6) $col=1;
        if($col==1) echo "<tr>";
        echo "<td class='table-active'>$i</td><td>"."&#".$i."</td>";
        if($col==5) echo "</tr>";
    }
    echo "</tbody>";
?>
</table>
</body>
</html>