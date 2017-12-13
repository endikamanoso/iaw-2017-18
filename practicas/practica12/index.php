<?php
$colorAnt=false;
if(isset($_COOKIE["color"])) {
    $colorAnt = $_COOKIE["color"];
}
$color="rgb(".
            mt_rand(0,255).",".
            mt_rand(0,255).",".
            mt_rand(0,255).
        ")";
setcookie("color",$color,time()+60*60*24*7);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #colorAnt{
         position:absolute;
            right:0;
            top:0;
            width:300px;
            height:300px;
        }
        #colorAnt h1{
            margin:0;
            font-size:12pt;
            font-family: sans-serif;
            background-color: white;
            text-align: center;
        }
        #fondo{
          position: fixed;
            left:0;
            top:0;
            width: 100%;
            height:100%;
        }
    </style>
</head>
<body>
<div id="fondo" style="background-color: <?=$color?>">
    <?php
    if($colorAnt!==false) {
        ?>
        <div id="colorAnt" style="background-color: <?= $colorAnt ?>">
            <h1>Color Anterior</h1>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>