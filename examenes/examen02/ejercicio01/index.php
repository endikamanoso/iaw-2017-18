<?php
$texto2="";
if(isset($_POST["texto2"]))
    $texto2=$_POST["texto2"];

if(isset($_POST["texto"])) {
    $texto = $_POST["texto"];
    if(strpos($texto,"<")!==false || strpos($texto,">")!==false){
        $texto="";
        $texto2="";
    }
    else{
        $texto2=$texto2."<p>$texto</p>";
    }
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
    <link rel="stylesheet" href="../../../librerias/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron">
    <h1>Texto interminable</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="texto">Texto</label>
                    <textarea name="texto" id="texto" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <textarea name="texto2" id="texto2" cols="30" rows="10" hidden><?=$texto2?></textarea>
                <button class="btn btn-primary btn-lg btn-block" >Enviar</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-6">
            <?=$texto2?>
        </div>
    </div>
</main>
</body>
</html>