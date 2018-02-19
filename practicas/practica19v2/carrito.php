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
    <title>Carrito de la compra</title>
    <meta name="author" content="Jorge Sánchez">
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../librerias/css/font-awesome.min.css">
    <style>
        .col{border:1px solid black;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Lista de artículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registro.php">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="acceso.php">Acceso</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="carrito.php">Ver carrito <i class="fa fa-shopping-cart"></i></a>
            </li>
        </ul>
    </div>
</nav>
<main class="container">
    <div class="row">
        <div class="col-12"><h1 class="display-3 text-center">Carrito de la compra</h1></div>
    </div>
    <div class="row">
    <div class="col-12">
    <?php
    $mysqli=conectarBD();

    if($mysqli->connect_error==false){
        $sql="SELECT id_articulo,r.nombre,r.precio,c.cantidad,r.image_peque FROM carrito c".
        " JOIN ratones r USING(id_articulo) WHERE id_cliente=1";
        $res=$mysqli->query($sql);

        if($mysqli->error==false){
            $fila=$res->fetch_assoc();
            if($fila){
                echo "<form action='actualizar.php'>";
                echo "<table class='table'>";
                $total=0;
                    while($fila){
                        echo "<tr>";
                            echo "<td><img src='img/".$fila["image_peque"]."' alt='miniatura' class='float-left'></td>";
                            echo "<td><strong>".$fila["nombre"]."</strong></td>";
                            echo "<td>".$fila["precio"]."&euro;</td>";
                            $id=$fila["id_articulo"];
                            echo "<td><label for='cantidad$id'>Cantidad&nbsp;&nbsp;</label><input type='number' id='cantidad$id' name='cantidad[$id]' value='".$fila["cantidad"]."'></td>";
                            echo "<td><a href='quitar.php?id_articulo=".$fila["id_articulo"]."' class='btn btn-danger'>Quitar</a>";
                        echo "</tr>";
                        $total+=$fila["precio"]*$fila["cantidad"];
                        $fila=$res->fetch_assoc();
                    }
                    echo "</tr>";
                echo "</table>";
                echo "<p><strong>Total: </strong>$total &euro;</p>";
                echo "<p class='text-center'>";
                    echo "<button class='btn btn-lg btn-clock btn-primary'>Recalcular</button>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<a href='vaciar.php' class='btn btn-lg btn-clock btn-danger'>Vaciar carrito</a>";
                echo "</p>";
                echo "</form>";
            }
            else{
                echo "<p>No hay artículos en el carrito</p>";
            }
            $res->close();
        }
        $mysqli->close();
    }

    ?>
        <p></p>
        <p></p>
        <a href="index.php" class="btn btn-secondary">Salir del carrito de la compra</a>
    </div>
    </div>
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