<?php
$c = "#000000";
if (isset($_POST["numero1"]))
    if (is_numeric($_POST["numero1"]))
        $n1 = $_POST["numero1"];
if (isset($_POST["numero2"]))
    if (is_numeric($_POST["numero2"]))
        $n2 = $_POST["numero2"];
if (isset($_POST["intervalo"]))
    if (is_numeric($_POST["intervalo"]))
        $in = $_POST["intervalo"];
if (isset($_POST["color"])) $c = $_POST["color"];
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Números</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
    <style>
        [type="color"] {
            height: 6em;
        }
    </style>
</head>
<body>
<header class="jumbotron">
    <h1 class="display-3 text-center">SERIE NUMÉRICA</h1>
</header>
<main id="form" class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-12-xs">
            <form action="formulario-numeros.php" method="post">
                <input type="text" id="numero1" name="numero1"
                    <?php if (isset($n1)) echo "value='$n1'"; ?> placeholder="Escriba el primer número"
                       class="form-control"><br>
                <input type="text" id="numero2" name="numero2"
                       placeholder="Escriba el segundo número" <?php if (isset($n2)) echo "value='$n2'"; ?>
                       class="form-control"><br>
                <input type="text" id="intervalo" name="intervalo" <?php if (isset($in)) echo "value='$in'"; ?>br
                       placeholder="Intervalo" class="form-control"><br>
                <div class="input-group">
                    <span class="input-group-addon">Color</span>
                    <input type="color" id="color" name="color" placeholder="color"
                           value="<?= $c ?>" class="form-control">
                </div>
                <br>
                <button class="btn btn-lg btn-block">Realizar</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 col-12-xs text-center" id="cResultado">
            <?php
            if (isset($c) && isset($n1) && isset($n2) && isset($in)) {
                echo "<div id='resultado' style='color:$c;'>";
                if ($n1 < $n2) {
                    $min = $n1;
                    $max = $n2;
                } else {
                    $min = $n2;
                    $max = $n1;
                }
                for ($i = $min; $i <= $max; $i += $in) {
                    echo "$i<br>";
                }
            }
            ?>
        </div>
    </div>
</main>



</div>
</body>
</html>