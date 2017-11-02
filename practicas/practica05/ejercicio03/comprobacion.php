<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Comprobación numérica</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron text-center">
    <h1 class="display-3">COMPROBACIÓN NUMÉRICA</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12">
            <?php
            if(isset($_GET["n"])==false){
                header("Location:index.php");
            }
            else{
                $n=$_GET["n"];
                if(is_numeric($n)==false){
                    echo "<p class='alert alert-danger'>No se ha enviado un número</p>";
                }
                else{
                    $texto="Es un número";
                    if((int)$n!=$n){
                        $texto.=" y tiene decimales";
                    }
                    else{
                        $texto.=" y no tiene decimales";
                    }
                    echo "<p class='alert alert-success'>$texto</p>";
                }
            }
            ?>
            <br>
            <a href="index.php">Volver al formulario</a>
        </div>
    </div>
</main>
</body>
</html>