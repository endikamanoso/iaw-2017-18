<?php
include "constantes.php";

foreach($_GET as $clave=>$valor){
    $$clave=$valor;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Cálculo de salario</title>
    <link rel="stylesheet" href="../librerias/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron text-center">
    <h1 class="display-3">CÁLCULO DE SALARIO</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12">
            <form action="calculo.php">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"
                    <?php
                        if(isset($nombre)) echo " value='$nombre' "
                     ?>
                     >
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos"
                    <?php
                    if(isset($apellidos)) echo " value='$apellidos' "
                    ?>
                    >
                </div>
                <div class="form-group">
                    <label for="salario">Salario (en euros)</label>
                    <input type="number" class="form-control" id="salario" name="salario" step="0.01"
                    <?php
                    if(isset($salario)) echo " value='$salario' "
                    ?>
                    >
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" min="18"
                    <?php
                    if(isset($edad)) echo " value='$edad' "
                    ?>
                    >
                </div>
                <button class="btn btn-primary btn-block btn-lg">
                    CALCULAR
                </button>
            </form>
        </div>
    </div>
</main>
<footer class="container">
    <div class="row">
        <div class="col-12">
            <p>&nbsp;</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12">
            <?php
            if(isset($error)){
                if(is_numeric($error) && $error>0){
                    $n=1;
                    while($n<=$error){
                        if($error & $n){
                            echo "<p class='alert alert-danger'>".$msg_error[$n]."</p>";
                        }
                        $n*=2;
                    }
                }
            }
            ?>
        </div>
    </div>

</footer>
</body>
</html>