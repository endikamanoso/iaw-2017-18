<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sanchez">
    <title>Tabla Unicode 5 columnas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<header class="jumbotro">
    <h1>Tabla Unicode</h1>
</header>

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
    $codigo=1;
    //escribo 10000 filas, 50000/5
    for($i=1;$i<=10000;$i++){
        echo "<tr>";
        for($j=1;$j<=5;$j++) {
            echo "<td class='table-active'>$codigo</td><td>" . "&#$codigo" . $i . "</td>";
            $codigo++;
        }
        echo "<tr>";
    }
    echo "</tbody>";
?>
</table>
</body>
</html>