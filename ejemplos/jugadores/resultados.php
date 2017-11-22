<?php
include "constantes.php";
$error=0;
if( isset($_GET["messi"])==false ||
    isset($_GET["ronaldo"])==false ||
    isset($_GET["griezmann"])==false ){
    $error=E_NO_HAY_DATOS;
}
else{
    $messi=$_GET["messi"];
    $ronaldo=$_GET["ronaldo"];
    $griezmann=$_GET["griezmann"];
    if( is_numeric($messi)==false ||
        is_numeric($ronaldo)==false ||
        is_numeric($griezmann)==false){
        $error=E_NO_SON_NUMEROS;
    }
    else{
        if($griezmann<0 || $griezmann>100){
            $error=E_GRIEZMANN_MAL;
        }
        if($messi<0 || $messi>100){
            $error+=E_MESSI_MAL;
        }
        if($ronaldo<0 || $ronaldo>100){
            $error+=E_RONALDO_MAL;
        }
        if($ronaldo+$griezmann+$messi!=100){
            $error+=E_SUMAL_MAL;
        }
    }
}

if($error>0)
    header("Location:index.php?error=$error");
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo "<p>Messi: ";
    for($i=1;$i<$messi;$i++){
        echo "*";
    }
    echo "</p>";
    echo "<p>Ronaldo: ";
    for($i=1;$i<$ronaldo;$i++){
        echo "*";
    }
    echo "</p>";
    echo "<p>Griezmann: ";
    for($i=1;$i<$griezmann;$i++){
        echo "*";
    }
    echo "</p>";

?>
</body>
</html>