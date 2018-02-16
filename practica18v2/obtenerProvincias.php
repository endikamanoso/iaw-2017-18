<?php
header("Content-Type: text/xml; charset=utf-8");
include "errores.php";
$error=E_SIN_ERROR;
echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>";
echo "<comunidad>";
if(isset($_GET["comunidad"])){
    $comunidad=$_GET["comunidad"];
    if(is_numeric($comunidad)){
        $mysqli=new mysqli("localhost","geografia","geografia","geografia");
        if($mysqli->connect_errno==true){
            $error=E_BASE_DATOS_GENERAL;
        }
        else{
            $sql="SELECT n_provincia, nombre FROM provincias ".
                 "WHERE id_comunidad=$comunidad";
            $res=$mysqli->query($sql);
            if($mysqli->errno){
                $error=E_BASE_DATOS_EJECUCION;
            }
            else{
                if($res->num_rows==0){
                    $error=E_COMUNIDAD_NO_VALIDA;
                }
                else{
                    echo "<provincias>";
                    $fila=$res->fetch_assoc();
                    while($fila){
                        $n_provincia=$fila["n_provincia"];
                        $nombre=$fila["nombre"];
                        echo "<provincia>";
                        echo "<n_provincia>$n_provincia</n_provincia>";
                        echo "<nombre>$nombre</nombre>";
                        echo "</provincia>";
                        $fila=$res->fetch_assoc();
                    }
                    echo "</provincias>";  //fin de la lista de provincias
                    $res->close();
                }
            }
            $mysqli->close();
        }
    }
    else{
        $error=E_COMUNIDAD_NO_NUMERICA;
    }
}
else{
    $error=E_SIN_PARAMETROS;
}

//control de errores, si no hay, se usará una llave vacía
echo "<error>";
echo "<codigo>$error</codigo>";
echo "<mensaje>".MENSAJES_ERROR[$error]."</mensaje>";
echo "</error>";
echo "</comunidad>";

?>