<?php
session_start();
include("constantes.php");
$mensaje=obtenermensaje();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de ratones</title>
    <meta name="author" content="Jorge Sánchez">
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../librerias/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Lista de artículos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registro.php">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="acceso.php">Acceso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="carrito.php">Ver carrito <i class="fa fa-shopping-cart"></i></a>
            </li>
        </ul>
    </div>
</nav>
<main class="container">
    <div class="row">
        <div class="col-12"><h1 class="display-3 text-center">Lista de artículos</h1></div>
    </div>
    <?php
    $mysqli=conectarBD();

    if($mysqli->connect_error==false){
        $sql="SELECT * FROM ratones";
        $res=$mysqli->query($sql);
        if($mysqli->error==false){
            $fila=$res->fetch_assoc();
            while($fila){
                echo "<div class='row'>";
                    echo "<div class='col-12'>";
                        echo "<h2 class='text-center bg-dark text-white'>".$fila["nombre"]."</h2>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='row'>";
                    echo "<div class='col-6'>";
                        echo "<img src='img/".$fila["imagen_grande"]."' alt='".$fila["nombre"]."' class='rounded mx-auto d-block'>";
                    echo "</div>";
                    echo "<div class='col-6'>";
                        echo "<p class='text-dark'><span class='badge badge-secondary'>Descripción</span><br> ".$fila["descripcion"]."</p>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='row'>";
                    echo "<div class='col-2 text-center'>";
                        echo "<img src='img/".$fila["image_d1"]."' alt='".$fila["nombre"]."' class='rounded'>";
                    echo "</div>";
                    echo "<div class='col-2 text-center'>";
                        echo "<img src='img/".$fila["image_d2"]."' alt='".$fila["nombre"]."' class='rounded'>";
                    echo "</div>";
                    echo "<div class='col-2 text-center'>";
                        echo "<img src='img/".$fila["image_d3"]."' alt='".$fila["nombre"]."' class='rounded'>";
                    echo "</div>";
                    echo "<div class='col-6  align-self-end'>";
                        echo "<p><span class='badge badge-secondary'>Precio</span> ".$fila["precio"]." &euro;<br>";
                        echo "<span class='badge badge-secondary'>Resolución</span> ".$fila["resolucion"]." dpi<br>";
                        if($fila["wireless"]) $wireless="si";
                        else $wireless="no";
                        echo "<span class='badge badge-secondary'>Wireless</span> $wireless</p>";
                        echo "<p><a href='anadir.php?id_articulo=".$fila["id_articulo"]."'> Añadir al carrito<i class='fa fa-cart-arrow-down'></i></a></p>";
                    echo "</div>";
                echo "</div>";

                $fila=$res->fetch_assoc();
            }
            $res->close();
        }
        $mysqli->close();
    }

    ?>
</main>
<div class="modal fade" tabindex="-1" role="dialog" id="mensajes">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mensaje</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><?=$mensaje?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
            </div>
        </div>
    </div>
</div>
<script src="../../librerias/js/jquery-3.2.1.min.js"></script>
<script src="../../librerias/js/popper.js"></script>
<script src="../../librerias/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $("#mensajes").modal({
            show:<?=$mensaje?"true":"false"?>
        })
    })
</script>
</body>
</html>