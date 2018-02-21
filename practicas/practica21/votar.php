<?php
session_start();
header("Content-Type: application:json; charset=utf-8");
include "constantes.php";
$error=E_SIN_ERROR;
echo "{";
    if(isset($_SESSION["clave"]) && $_SESSION["clave"]==CLAVE){

        if(isset($_SESSION["contador"])){
            $error=E_YA_VOTADO;
        }
        else{
            if(isset($_GET["bici"])){
                $bici=$_GET["bici"];
                $mysqli=conectarBD();
                if($mysqli->connect_error){
                    $error=E_BD_SIN_CONEXION;
                }
                else{
                    $sql="UPDATE bicis SET votos=votos+1 WHERE modelo=?";
                    $st=$mysqli->prepare($sql);
                    $st->bind_param("s",$bici);
                    if($st->execute()==false){
                        $error=E_BD_INSTRUCCION;
                    }
                    else{
                        if($st->affected_rows==0){
                            $error=E_DATOS_INCORRECTOS;
                        }
                        $st->close();
                    }
                }

            }
            else{
                $error=E_FALTAN_DATOS;
            }
            $_SESSION["contador"]=1;
        }
        unset($_SESSION["clave"]);
     }
    else{
        $error=E_ACCESO_INDEBIDO;
    }
    echo "\"error\":{";
    echo "\"codigo\":$error,";
    echo "\"mensaje\":\"".MENSAJES[$error]."\"";
    echo "}";
echo "}";


?>