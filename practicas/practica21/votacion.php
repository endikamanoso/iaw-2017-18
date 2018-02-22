<?php

session_start();
header("Content-Type: application:json; charset=utf-8");
include "constantes.php";
$error = E_SIN_ERROR;
echo "{";
$mysqli=conectarBD();
if ($mysqli->connect_error) {
    $error = E_BD_SIN_CONEXION;
} else {
    $sql = "SELECT SUM(votos) AS suma FROM bicis";
    $res=$mysqli->query($sql);
    if($mysqli->error==true){
        $error = E_BD_INSTRUCCION;
    } else {
        $fila= $res->fetch_assoc();
        $totalVotos=$fila["suma"];
        $res->close();
        $sql = "SELECT modelo,votos FROM bicis ORDER BY votos DESC";
        $res=$mysqli->query($sql);
        if($mysqli->error==true){
            $error = E_BD_INSTRUCCION;
        } else {
            $fila=$res->fetch_assoc();
            echo "\"bicis\":[";
                while($fila){
                    $modelo=$fila["modelo"];
                    $votos=$fila["votos"];
                        echo "{";
                            echo "\"modelo\":\"$modelo\",";
                            echo "\"votos\":$votos,";
                            echo "\"porcentaje\":".(($votos/$totalVotos)*100);
                        echo "}";
                    $fila=$res->fetch_assoc();
                    if($fila) echo ",";
            }
            echo"],";
        }
        $res=$mysqli->query($sql);

    }
}
echo "\"error\":{";
echo "\"codigo\":$error,";
echo "\"mensaje\":\"" . MENSAJES[$error] . "\"";
echo "}";
echo "}";


?>