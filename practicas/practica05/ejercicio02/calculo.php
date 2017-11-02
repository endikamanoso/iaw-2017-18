<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Cálculo de salario</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron text-center">
    <h1 class="display-3">SALARIO RECALCULADO</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12">
            <?php
            foreach($_GET as $clave=>$valor){
                $$clave=$valor;
            }
            if( isset($nombre)==false ||
                isset($apellidos)==false ||
                isset($edad)==false ||
                isset($salario)==false){
                echo "<p class='alert alert-danger'>Faltan datos</p>";
            }
            else{
                if($nombre=="" || $apellidos=="" || $edad=="" || $salario==""){
                    echo "<p class='alert alert-danger'>Falta rellenar algunos datos</p>";
                }
                else{
                    if($salario<1000){
                        if($edad<30) $salario=1100;
                        elseif($edad<=45) $salario*=1.03;
                        else $salario*=1.15;
                    }
                    elseif($salario<=2000){
                        if($edad>45) $salario*=1.03;
                        if($edad<=45) $salario*=1.1;
                    }
                    echo "<p>$nombre $apellidos, tu salario es de $salario &euro;";
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