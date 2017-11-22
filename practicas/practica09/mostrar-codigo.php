<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
    <style>
        tr:last-of-type td{
            font-size:6em;
        }
    </style>
</head>
<body>
<main class='container-fluid'>
    <div class='row'>
        <div class='col-12'>
            <?php

            if (isset($_GET["codigo"])) {
                $codigo = hexdec($_GET["codigo"]);
                if ($codigo < hexdec("0600") || $codigo > hexdec("06FF")) {
                    echo "<main class='container-fluid'><div class='row'><div class='col-12'>";
                    echo "<p class='alert alert-danger'>Ese código no sirve para el Árabe</p>";
                } else {
                    ?>
                    <h1>Código <?= $_GET["codigo"] ?></h1>
                    <table class="table">
                        <tr>
                            <td>Anterior</td>
                            <td>Actual</td>
                            <td>Siguiente</td>
                        </tr>
                        <tr>
                            <td>&#<?= $codigo - 1 ?></td>
                            <td style="font-size:14em;">&#<?= $codigo ?></td>
                            <td>&#<?= $codigo + 1 ?></td>
                        </tr>

                    </table>

                    <?php
                }
            } else {
                echo "<p class='alert alert-danger'>No se ha indicado código alguno</p>";
            }
            ?>
            <footer class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <p class="enlace"><a href="lectura-codigo.php">Probar otro código</a></p>
                    </div>
                </div>
            </footer>
</body>
</html>