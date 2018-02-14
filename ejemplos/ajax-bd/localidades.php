<?php
$error=true;
if(isset($_GET["provincia"]) && is_numeric($_GET["provincia"])){

    $n_provincia=$_GET["provincia"];
    $mysqli=new mysqli("localhost","geografia","geografia","geografia");

    if($mysqli->connect_error==false) {
        $sql = "select id_localidad,nombre from localidades where n_provincia=$n_provincia order by nombre";
        $res = $mysqli->query($sql);
        if($mysqli->error==false){
            $error=false;
            header("Content-Type:application/json");
            $fila=$res->fetch_assoc();
            echo "lista:[";
            while($fila){
                $nombre=$fila["nombre"];
                echo "'$nombre'";
                $fila=$res->fetch_assoc();
                if($fila) echo ",";
            }
            echo "]";
            $res->close();
        }
        $mysqli->close();


    }

}

if($error==true) header("Location:index.php");

?>