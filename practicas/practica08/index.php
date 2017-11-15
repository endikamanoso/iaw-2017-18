<?php
include "constantes.php";
$messi="";
$ronaldo="";
$griezmann="";
if(isset($_GET["messi"]) && is_numeric($_GET["messi"])) $messi=$_GET["messi"];
if(isset($_GET["ronaldo"]) && is_numeric($_GET["ronaldo"])) $ronaldo=$_GET["ronaldo"];
if(isset($_GET["griezmann"]) && is_numeric($_GET["griezmann"])) $griezmann=$_GET["griezmann"];

$estilo="";
$mensaje="";
$messi="";
$ronaldo="";
$griezmann="";
if($_GET["messi"] && is_numeric($_GET["messi"])) $messi=$_GET["messi"];
if($_GET["ronaldo"] && is_numeric($_GET["ronaldo"])) $ronaldo=$_GET["ronaldo"];
if($_GET["griezmann"] && is_numeric($_GET["griezmann"])) $griezmann=$_GET["griezmann"];

if (isset($_GET["error"])){
    $error=$_GET["error"];
    if(is_numeric($error) && $error>=1 && $error<=256){
        $estilo=" style='display:block'"; //si hay error hacemos visible la capa
        if($error & ERROR_NO_NUMEROS){
            $mensaje.="<p>Hay datos no numéricos</p>";
        }
        if($error & ERROR_MAS_DE_CIEN){
            $mensaje.="<p>La suma de porcentajes supera el 100%</p>";
        }
        if($error & ERROR_MENOS_DE_CIEN){
            $mensaje.="<p>La suma de porcentajes no llega al 100%</p>";
        }
        if($error & ERROR_FALTAN_PARAMETROS){
            $mensaje.="<p>Faltan parámetros</p>";
        }
        if($error & ERROR_RANGO_MESSI){
            $mensaje.="<p>El rango de Messi tiene que ir de 0 a 100</p>";
        }
        if($error & ERROR_RANGO_RONALDO){
            $mensaje.="<p>El rango de Ronaldo tiene que ir de 0 a 100</p>";
        }
        if($error & ERROR_RANGO_GRIEZMANN){
            $mensaje.="<p>El rango de Griezman tiene que ir de 0 a 100</p>";
        }
    }
}
else{
    $error=0;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div id="fondo">
    <div id="capa">
        <h1>Resultados encuesta de fútbol, balon de oro</h1>
        <form action="resultado.php">
            <table>
                <tr>
                    <td><label for="messi">Messi</label></td>
                    <td><input type="number" id="messi" name="messi"
                            <?php
                            echo "value='$messi'";
                            if($error&ERROR_RANGO_MESSI) echo "style='background-color:red'"
                            ?>
                        >%</td>
                </tr>
                <tr>
                    <td><label for="ronaldo">Cristiano Ronaldo</label></td>
                    <td><input type="number" id="ronaldo" name="ronaldo"
                               <?php
                               echo "value='$ronaldo'";
                               if($error&ERROR_RANGO_RONALDO) echo "style='background-color:red'"
                               ?>
                        >%</td>
                </tr>
                <tr>
                    <td><label for="griezmann">Griezmann</label></td>
                    <td><input type="number" id="griezmann" name="griezmann"
                            <?php
                            echo "value='$griezmann'";
                            if($error&ERROR_RANGO_GRIEZMANN) echo "style='background-color:red'"
                            ?>
                        >%</td>
                </tr>
            </table>
            <button>Enviar</button>

        </form>
    </div>
</div>

<div id="error" <?=$estilo?>>
    <?=$mensaje?>
</div>
</body>
</html>