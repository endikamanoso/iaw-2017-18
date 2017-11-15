<?php
if (isset($_GET["p"])) {
    $pagina = $_GET["p"];
    if ($pagina < 1) $pagina = 1;
} else {
    $pagina = 1;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Unicode Paginado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../../librerias/css/font-awesome.min.css">
    <style>
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 7em;
        }

        main {
            position: fixed;
            top: 7em;
            left: 0;
            width: 100%;
            bottom: 0;
            overflow: auto;
        }

    </style>
</head>
<body>
<nav class="'container-fluid">
    <div class="row justify-content-center">
        <?php
        //mostramos el botón de página anterior, pero no si
        //estamos en la primera página
        if ($pagina > 1) {
            echo '<div class="col-1 text-center"><a href="index.php?p=' . ($pagina - 1) . '"><i class="fa fa-chevron-left fa-3x"></i></a></div>';
        }
        echo "<div class='col-4'><h1 class='text-center'>Pagina $pagina</h1></div>";
        echo '<div class="col-1 text-center"><a href="index.php?p=' . ($pagina + 1) . '"><i class="fa fa-chevron-right fa-3x"></i></a></div>';
        ?>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <?php
                $codigo = ($pagina - 1) * 500 + 1;
                //primera fila
                echo "<thead class='thead-dark'><tr>";
                for ($i = 1; $i <= 5; $i++) {
                    echo "<th scope='col'>Código</th><th scope='col'>Valor</th>";
                }
                echo "</tr></thead>";
                ?>
            </table>
        </div>
</nav>
<main>
    <div id="tabla">
        <table class="table table-striped">
            <?php
            //filas, 100 (500/5)
            for ($i = 1; $i <= 100; $i++) {
                echo "<tr>";
                for ($j=1;$j<=5; $j++) {
                    echo "<td class='table-active'>$codigo</td><td>" . "&#$codigo;</td>";
                    $codigo++;
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</main>
</body>
</html>