<?php
session_start();
include "constantes.php";
$_SESSION["clave"]=CLAVE;

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mio.css">
</head>
<body>
<header class="bg-dark">
    <h1 class="bg-dark text-center text-white">Listado de bicicletas</h1>
</header>
<div id="bicis">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 ficha text-center" id="scott">
                <h2 class="text-center">Scott Genius 700 Ultimate</h2>
                <img src="img/scott.jpg" alt="Scott genius 700 Ultimate" class="img-fluid rounded-circle">
                <p><a href="https://www.scott-sports.com/es/es/product/bicicleta-scott-genius-700-ultimate" target="_blank">Enlace del fabricante</a> </p>
                <div class="detalle bg-dark text-white">
                    <p><strong>Tipo: </strong>All Mountain</p>
                    <p><strong>Precio</strong> 9700&euro;</p>
                    <p><a href="#" data-id="scott" class="btn btn-primary">Votar</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ficha text-center" id="specialized">
                <h2 class="text-center">Specialized S-Works Epic XTR Di2</h2>
                <img src="img/specialized.jpg" alt="Specialized Epic" class="img-fluid rounded-circle">
                <p><a href="https://www.specialized.com/es/es/s-works-epic-xtr-di2/p/129015" target="_blank">Enlace del fabricante</a> </p>
                <div class="detalle bg-dark text-white">
                    <p><strong>Tipo: </strong>XC-Maratón</p>
                    <p><strong>Precio</strong> 9000 &euro;</p>
                    <p><a href="#" data-id="specialized" class="btn btn-primary">Votar</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ficha text-center" id="mondraker">
                <h2 class="text-center">Mondraker Foxy Carbon RR SL</h2>
                <img src="img/mondraker.jpg" alt="Specialized Epic" class="img-fluid rounded-circle">
                <p><a href="http://www.mondraker.com/be/en/2018-FOXY-CARBON-RR-SL" target="_blank">Enlace del fabricante</a> </p>
                <div class="detalle bg-dark text-white">
                    <p><strong>Tipo: </strong>All Mountain</p>
                    <p><strong>Precio: </strong> 8500 &euro;</p>
                    <p><a href="#" data-id="mondraker" class="btn btn-primary">Votar</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ficha text-center" id="giant">
                <h2 class="text-center">Giant XTC Advanced 29er 0</h2>
                <img src="img/giant.jpg" alt="Specialized Epic" class="img-fluid rounded-circle">
                <p><a href="https://www.giant-bicycles.com/es/xtc-advanced-29er-0" target="_blank">Enlace del fabricante</a> </p>
                <div class="detalle bg-dark text-white">
                    <p><strong>Tipo: </strong>XC-Maratón</p>
                    <p><strong>Precio: </strong> 7199 &euro;</p>
                    <p><a href="#" data-id="giant" class="btn btn-primary">Votar</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ficha text-center" id="cannondale">
                <h2 class="text-center">Cannondale Jekyll Carbon 1</h2>
                <img src="img/cannondale.jpg" alt="Cannondale" class="img-fluid rounded-circle">
                <p><a href="http://www.cannondale.com/en/USA/Bike/ProductDetail?Id=7d5b929c-b375-4d44-bf05-1b268f6d2649" target="_blank">Enlace del fabricante</a> </p>
                <div class="detalle bg-dark text-white">
                    <p><strong>Tipo: </strong>Enduro</p>
                    <p><strong>Precio: </strong> 7500 &euro;</p>
                    <p><a href="#" data-id="cannondale" class="btn btn-primary">Votar</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ficha text-center" id="santa-cruz">
                <h2 class="text-center">Santa Cruz Nomad 4 XX1 Carbon CC</h2>
                <img src="img/santa-cruz.jpg" alt="Santa Cruz Nomad 4" class="img-fluid rounded-circle">
                <p><a href="https://www.santacruzbicycles.com/es-ES/nomad" target="_blank">Enlace del fabricante</a> </p>
                <div class="detalle bg-dark text-white">
                    <p><strong>Tipo: </strong>Enduro</p>
                    <p><strong>Precio: </strong> 10000 &euro;</p>
                    <p><a href="#" data-id="santa-cruz" class="btn btn-primary">Votar</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ficha text-center" id="lapierre">
                <h2 class="text-center">Lapierre XR 929 Ultimate</h2>
                <img src="img/lapierre.jpg" alt="Lapierre XR 929 Ultimate" class="img-fluid rounded-circle">
                <p><a href="https://shop.lapierrebikes.es/xr-929-ultimate" target="_blank">Enlace del fabricante</a> </p>
                <div class="detalle bg-dark text-white">
                    <p><strong>Tipo: </strong>XC</p>
                    <p><strong>Precio: </strong> 5800 &euro;</p>
                    <p><a href="#" data-id="lapierre" class="btn btn-primary">Votar</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ficha text-center" id="intense">
                <h2 class="text-center">Intense Carbine</h2>
                <img src="img/intense.jpg" alt="Intense Carbine" class="img-fluid rounded-circle">
                <p><a href="https://eu.intensecycles.com/collections/enduro-race/products/carbine?variant=6916630478890" target="_blank">Enlace del fabricante</a> </p>
                <div class="detalle bg-dark text-white">
                    <p><strong>Tipo: </strong>Enduro</p>
                    <p><strong>Precio: </strong> 8900 &euro;</p>
                    <p><a href="#" data-id="intense" class="btn btn-primary">Votar</a></p>
                </div>
            </div>

        </div>
    </div>
</div>
<div id="contenedorFormulario" class="bg-info">
    <h2 class="text-warning text-center">Vota tu bici favorita</h2>
    <form id="formulario">
        <div class="form-group">
            <label for="bici" class="text-white">Bicicleta elegida</label>
            <input type="text" id="bici" name="bici" readonly class="form-control">
            <p></p>
            <button type="submit" class="btn btn-block btn-warning">Enviar</button>
        </div>

    </form>
</div>

<div id="imagenGrande">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12" id="fotoBiciGrande">

            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/mio.js"></script>


</body>
</html>