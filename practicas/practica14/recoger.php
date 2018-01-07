<?php
if(isset($_COOKIE["usuario"]) && !isset($_GET["nuevo"])){
    $usuario=unserialize($_COOKIE["usuario"]);
    header('Content-Type: application/json');
    echo $usuario;
}
else{
    $data = file_get_contents("https://randomuser.me/api/");

    if ($data==false) echo "Fallo";
    else {
        setcookie("usuario", serialize($data), time() + 7 * 24 * 60 * 60);
        header('Content-Type: application/json');
        echo $data;
    }
}
?>