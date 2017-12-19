<?php
if(isset($_COOKIE["combinacion"])){
    $combinacion=unserialize($_COOKIE["combinacion"]);
}
else {
    $combinacion = array();
    for ($i = 1; $i <= 6; $i++) {

        $nuevo = mt_rand(1, 49);
        while (array_search($nuevo, $combinacion) !== false) {
            $nuevo = mt_rand(1, 49);
        }
        array_push($combinacion, $nuevo);
    }
    sort($combinacion);
    setcookie("combinacion", serialize($combinacion));
}
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
foreach ($combinacion as $i=>$numero){
    echo "<p>$numero</p>";
}
?>
<form action="borrar.php">
    <button>Nueva combinación</button>
</form>
</body>
</html>