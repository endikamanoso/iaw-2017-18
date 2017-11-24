<?php
$error=0;
if(!isset($_GET["color1"]) || !isset($_GET["color2"]) ||
        !isset($_GET["filas"]) || !isset($_GET["columnas"] )){
    $error=1;
}
else{
     $color1=$_GET["color1"];
     $color2=$_GET["color2"];
     $filas=$_GET["filas"];
     $columnas=$_GET["columnas"];
     if(is_numeric($filas)==false || is_numeric($columnas)==false ||
        $filas<=0 || $filas>100 ||$columnas<=0 || $columnas>100 ||
        $filas%2!=0 || $columnas%2==0){
         $error=1;
     }
}
if($error) header("Location:index.php?error=1");
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #telon{
            position:fixed;
            left:0;
            top:0;
            width:100%;
            height:100%;
        }
        div{
            display:inline-block;
            float:left;
            width:<?=100/$columnas?>%;
            height:<?=100/$filas?>%;
        }
    </style>
</head>
<body>
<main id="telon">
    <?php
    $color=$color1;
    for($i=1;$i<=$filas;$i++){
        for($j=1;$j<=$columnas;$j++){
            echo "<div style='background-color:$color'></div>";
            if($color==$color1) $color=$color2;
            else $color=$color1;
        }
    }

    ?>
</main>
</body>
</html>