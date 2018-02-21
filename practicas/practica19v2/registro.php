<?php
session_start();
include("constantes.php");
if(isset($_SESSION["mensaje"]) && $_SESSION["mensaje"]==E_USUARIO_ANADIDO)
    header('Location:index.php');

$mensaje=obtenermensaje();
echo $mensaje;
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
            <li class="nav-item active">
                <a class="nav-link" href="#">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Acceso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="carrito.php">Ver carrito <i class="fa fa-shopping-cart"></i></a>
            </li>
        </ul>
    </div>
</nav>
<main class="container">
    <div class="row">
        <div class="col-12"><h1 class="display-3 text-center">Registro de usuarios</h1></div>
    </div>
    <form action="registrar.php">
        <div class="form-group">
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba su nombre" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="apellido1" class="col-sm-2 col-form-label">Primer Apellido</label>
                <div class="col-sm-10">
                    <input type="text" name="apellido1" id="apellido1" class="form-control" placeholder="escriba sus apellidos" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="apellido2" class="col-sm-2 col-form-label">Segundo Apellido (opcional)</label>
                <div class="col-sm-10">
                    <input type="text" name="apellido2" id="apellido2" class="form-control" placeholder="escriba sus apellidos" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="elija un nombre de usuario" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Escriba una contraseña" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="password2" class="col-sm-2 col-form-label">Repita contraseña</label>
                <div class="col-sm-10">
                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirme la contraseña" required>
                </div>
            </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block">Registrar</button>
        </div>
    </form>

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
            show:<?=$show?>
        })
    })
</script>
</body>
</html>