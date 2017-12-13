<?php
include "comprobar.php";
if(hayCookie()){
    //si tenemos preferencias ya guardadas, directamente vamos al saludo
    header("location:practica1-saludo.php");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de recogida de preferencias</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
    <style>
        [type="color"]{
            height:3em;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 col-xs-12">
            <h1>Elección de preferencias</h1>
            <form action="saludo.php">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control"/><br/>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control"/><br/>
                <label for="fondo">Color de fondo</label>
                <input type="color" name="fondo" id="fondo" value="#FFFFFF" class="form-control"/><br/>
                <label for="frente">Color de letra</label>
                <input type="color" name="frente" id="frente" class="form-control"/><br/>
                <label for="letra">Tipo de letra</label>
                <select name="letra" id="letra" class="form-control">
                    <option value="'Shadows Into Light', cursive">
                        Shadows Into Light
                    </option>
                    <option value="'Slabo 27px', serif">Slabo 27px</option>
                    <option value="'Roboto', sans-serif">Roboto</option>
                </select><br/>
                <button class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>