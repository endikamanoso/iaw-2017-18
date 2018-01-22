<?php
session_start();
//todos los resultados se guardan en array_res
$array_res=array();
$mysqli=new mysqli("localhost","cursos","123456","cursos");
if($mysqli->connect_error==false){
    $sql="SELECT * FROM cursos ORDER BY codigo";
    $res=$mysqli->query($sql);
    if($res){
        $fila=$res->fetch_assoc();
        while($fila){
            array_push($array_res,$fila);
            $fila=$res->fetch_assoc();
        }
        $res->close();
    }
    $mysqli->close();
    if(isset($_SESSION["aleatorio"])){
        shuffle($array_res);
        unset($_SESSION["aleatorio"]);
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
    <title>Lista de cursos</title>
    <!--<link rel="stylesheet" href="css/estilos.css">-->
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron">
<h1>Lista de Cursos</h1>
</header>
<?php
if(count($array_res)>0){
    //hay resultados
?>
    <table class="table">
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Plazas</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php
        foreach ($array_res as $i=>$fila){
            $clase="";
            $claseBotonAnadir="";
            $claseBotonQuitar="";
            if($fila["plazas"]==16){
                $claseBotonAnadir="disabled";
            }
            else if($fila["plazas"]==0){
                $clase="alert alert-danger";
                $claseBotonQuitar="disabled";
            }
            elseif($fila["plazas"]<5){
                $clase="alert alert-warning";
            }
            echo "\n\t<tr class='$clase'>\n";
            echo "\t\t<td>".$fila["codigo"]."</td>\n";
            echo "\t\t<td>".$fila["titulo"]."</td>\n";
            echo "\t\t<td>".$fila["plazas"]."</td>\n";
            echo "\t\t<td><a class='btn btn-primary $claseBotonQuitar' href='quitar.php?codigo=".$fila["codigo"]."'>Quitar</a></td>\n";
            echo "\t\t<td><a class='btn btn-primary $claseBotonAnadir' href='anadir.php?codigo=".$fila["codigo"]."'>Añadir</a></td>\n";
            echo "\t</tr>\n";
        }
        ?>
    </table>
<?php
}

?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <a class="btn btn-primary" href="aleatorio.php">Orden aleatorio</a> <a  class="btn btn-primary"  href="index.php">Orden por código</a><br>
        </div>
    </div>
</div>
<script src="../../librerias/js/jquery-3.2.1.min.js"></script>
</body>
</html>