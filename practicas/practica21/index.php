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
            <?php
            $mysqli=conectarBD();
            if($mysqli->connect_error){
              $error=E_BD_SIN_CONEXION;
            }
            else{
                $sql="SELECT b.id_bici as id_bici,m.nombre as marca,b.modelo as modelo,b.votos as votos, ".
                    "b.precio as precio,t.tipo as tipo,b.url as url,b.imagen as imagen ".
                    "FROM bicis b ".
                    "JOIN marcas m USING(id_marca) ".
                    "JOIN tipos_bici t USING(id_tipo)";
                $res=$mysqli->query($sql);
                if($mysqli->error){
                    $error=E_BD_INSTRUCCION;
                }
                else{
                    $fila=$res->fetch_assoc();
                    while($fila){
                        foreach($fila as $columna=>$valor){
                            $$columna=$valor;
                        }
                        ?>
                        <div class="col-12 col-md-6 col-lg-4 ficha text-center" id="i<?=$id_bici?>">
                <h2 class="text-center"><?=$modelo?></h2>
                <img src="img/<?=$imagen?>" alt="<?=$modelo?>" class="img-fluid rounded-circle">
                <p><a href="<?=$url?>" target="_blank">Enlace del fabricante</a> </p>
                <div class="detalle bg-dark text-white">
                    <p><strong>Marca: </strong><?=$marca?></p>
                    <p><strong>Tipo: </strong><?=$tipo?></p>
                    <p><strong>Precio</strong> <?=$precio?>&euro;</p>
                    <p><a href="#" data-id="i<?=$id_bici?>" class="btn btn-primary">Votar</a></p>
                </div>
            </div>
            <?php
                        $fila=$res->fetch_assoc();
                    }
                    $res->close();
                }
                $mysqli->close();
            }

            ?>




        </div>
    </div>
</div>
<div id="contenedorFormulario" class="bg-info">
    <h2 class="text-warning text-center">Vota tu bici favorita</h2>
    <form id="formulario" action="votar.php">
        <div class="form-group">
            <label for="bici" class="text-white">Bicicleta elegida</label>
            <input type="text" id="bici" name="bici" readonly class="form-control">
            <p></p>
            <button type="submit" class="btn btn-block btn-warning" id="votar">Enviar</button>
        </div>

    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <h2 class="text-warning text-center"><button type="button" id="votacion" class="btn btn-lg btn-block btn-dark">Ver Resultados</button></h2>


</div>

<div id="imagenGrande">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12" id="fotoBiciGrande">

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mensajeVotar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="contenidoMensajeVotar">

        </div>
    </div>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mio.js"></script>


</body>
</html>