<?php

if(isset($_GET["codigo"])) {
    $codigo = $_GET["codigo"];
    $mysqli=new mysqli("localhost","cursos","123456","cursos");
    if($mysqli->connect_error==false){
        $sql="SELECT plazas FROM cursos WHERE codigo=$codigo";
        $res=$mysqli->query($sql);
        if($res){
            $fila=$res->fetch_assoc();
            if($fila){
                if($fila["plazas"]<16) {
                    $sql = "UPDATE cursos SET plazas=plazas+1
              WHERE codigo=$codigo";
                    $mysqli->query($sql);
                }
            }
        }
        $mysqli->close();
    }
}
else{
    header("Location:index.php");
}

header("Location:index.php");
?>