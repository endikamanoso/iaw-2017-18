<?php
include "constantes.php";
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
    <h1 class="display-3">SALARIO RECALCULADO</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12">
            <?php
            $cadena="";
            foreach($_GET as $clave=>$valor){
                $$clave=$valor;
                //texto de devolución de valores
                $cadena.="&".$clave."=".$$clave;
            }
            $error=0;
            if( isset($nombre)==false) $error+=E_FALTA_NOMBRE;
            if( isset($apellidos)==false) $error+=E_FALTA_APELLIDOS;
            if( isset($edad)==false) $error+=E_FALTA_EDAD;
            if( isset($salario)==false) $error+=E_FALTA_SALARIO;
            if($error==0){
                if($nombre=="") $error+= E_NOMBRE_VACIO;
                if($apellidos=="") $error+= E_APELLIDOS_VACIO;
                if($edad=="") $error+= E_EDAD_VACIO;
                if($salario=="") $error+= E_SALARIO_VACIO;
                if($error==0){
                    //cadena de devolución

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
            if($error){
                header("Location:index.php?error=".$error.$cadena);
            }
            ?>
            <br>
            <a href="index.php">Volver al formulario</a>
        </div>
    </div>
</main>
</body>
</html>