<?php
session_start();
include "errores.php";
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
        table{
            margin:auto;
            width:100%;
            max-width:700px;
            border-collapse: collapse;
        }
        th{
            border:1px solid black;
            background-color:gray;
            font-weight: bold;
            color:white;
            text-align: center;
        }
        td{
            border:1px solid black;
            font-weight: bold;
            text-align: left;
            padding-left:1em;
        }
    </style>
</head>
<body>
<?php
$error=0;
$mysqli=new mysqli("localhost","palabras",
    "12345","palabras");
if($mysqli->connect_error==false){
    $sql="SELECT UPPER(palabra) as palabra FROM palabras ORDER BY palabra";
    $res=$mysqli->query($sql);
    if($res){
        $fila=$res->fetch_assoc();
        if($fila) {
            echo "<table>";
            echo "<tr>";
            echo "<th>PALABRAS</th>";
            echo "</tr>";
            while ($fila) {
                echo "<tr><td>".$fila['palabra']."</td></tr>";
                $fila=$res->fetch_assoc();
            }
            echo "</table>";
        }
        else{
            echo "<p>No hay palabras todavía</p>";
        }
    }
    else{
        $error=E_INSTRUCCION;
    }
    $mysqli->close();
}
else{
    $error=E_CONEXION;
}
if($error!=0) $_SESSION["error"]=$error;

echo "<p><a href='index.php'>Volver al formulario</a></p>";



?>

</body>
</html>

