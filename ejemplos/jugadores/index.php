<?php
include "constantes.php";
if(isset($_GET["error"])){
    $error=$_GET["error"];
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
    <title>Document</title>
</head>
<body>
<form action="resultados.php">
    <label for="messi">Messi</label>
    <input type="text" name="messi" id="messi"><br>
    <label for="ronaldo">Ronaldo</label>
    <input type="text" name="ronaldo" id="ronaldo"><br>
    <label for="griezmann">Griezmann</label>
    <input type="text" name="griezmann" id="griezmann"><br>
    <button>Enviar</button>
</form>

<div id="error">
    <?php
    if($error>0) {
        for ($i = 1; $i <= E_ULTIMO_ERROR; $i *= 2) {
            if ($error&$i==true){
                echo "<p>".$mensajes[$i]."</p>";
            }
        }
    }
    ?>
</div>
</body>
</html>