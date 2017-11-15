<?php
include "constantes.php";
$error=0;
$messi="";
$ronaldo="";
$griezmann="";

if(isset($_GET["messi"]) && isset($_GET["ronaldo"]) && isset($_GET["griezmann"]) ){
    $messi=$_GET["messi"];
    $ronaldo=$_GET["ronaldo"];
    $griezmann=$_GET["griezmann"];

    if(is_numeric($messi) && is_numeric($ronaldo) && is_numeric($griezmann)){
        if($messi<0 || $messi>100){
            $error+=ERROR_RANGO_MESSI;
        }
        if($ronaldo<0 || $ronaldo>100){
            $error+=ERROR_RANGO_RONALDO;
        }
        if($griezmann<0 || $griezmann>100){
            $error+=ERROR_RANGO_GRIEZMANN;
        }

        if($messi+$ronaldo+$griezmann>100){
            $error+=ERROR_MAS_DE_CIEN;
        }
        elseif($messi+$ronaldo+$griezmann<100){
            $error+=ERROR_MENOS_DE_CIEN;
        }
    }
    else{
       $error+=ERROR_NO_NUMEROS;
    }
}
else{
    $error+=ERROR_FALTAN_PARAMETROS;
}

if($error){
   header("Location:index.php?error=$error&messi=$messi&ronaldo=$ronaldo&griezmann=$griezmann");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div id="fondo">
    <div id="capa">
        <table class="resultados">
            <tr class="azul">
                <td>Messi</td>
                <td>
                    <?php
                    for($i=1;$i<=$messi;$i+=2){
                        echo SIMBOLO;
                    }
                    ?>
                </td>
            </tr>
            <tr class="blanco">
                <td>Cristiano Ronaldo</td>
                <td>
                    <?php
                    for($i=1;$i<=$ronaldo;$i+=2){
                        echo SIMBOLO;
                    }
                    ?>
            </tr>
            <tr class="rojo">
                <td>Griezmann</td>
                <td>
                    <?php
                    for($i=1;$i<=$griezmann;$i+=2){
                        echo SIMBOLO;
                    }
                    ?>
            </tr>
        </table>
        <?="<a href='index.php?messi=$messi&ronaldo=$ronaldo&griezmann=$griezmann'>Volver</a>"?>
    </div>
</div>

</body>
</html>
