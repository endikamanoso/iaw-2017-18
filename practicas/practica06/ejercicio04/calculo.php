<?php
if(isset($_GET["n"])){
    $n=$_GET["n"];
}
else{
    $n="";
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar pares</title>
</head>
<body>
<?php
if($n!=""){//han enviado un número
    //cálculo de la suma de pares
    $suma=0;
    for($i=2;$i<$n;$i+=2){
        $suma+=$i;
    }
    echo "<p>La suma es <strong>$suma</strong></p>";
}
?>

<p><a href="index.html">Volver al formulario</a></p>

</body>
</html>