<?php

const DATOS_BD=array(
  "servidor"=>"localhost",
  "usuario"=>"tienda",
  "password"=>"12345",
  "bd"=>"tienda"
);


const E_SIN_ERROR=0;
const E_BD_SIN_CONEXION=1;
const E_BD_INSTRUCCION=2;
const E_USUARIO_NO_EXISTE=3;
const E_USUARIO_REPETIDO=4;
const E_PASSWORD_INCORRECTA=5;
const E_PASSWORD_NO_COINCIDE=6;
const E_ARTICULO_ANADIDO=7;
const E_FALTAN_DATOS=8;
const E_CARRITO_ACTUALIZADO=9;

const ARRAY_MENSAJES=array(
  E_SIN_ERROR=>"No hay errores",
  E_BD_SIN_CONEXION=>"No se pudo conectar con la base de datos",
  E_BD_INSTRUCCION=>"Fallo en la ejecución de la instrucción",
  E_USUARIO_NO_EXISTE=>"No existe ese usuario",
  E_USUARIO_REPETIDO=>"Ya existe es usuario",
  E_PASSWORD_NO_COINCIDE=>"Las contraseñas no coinciden",
  E_PASSWORD_INCORRECTA=>"La contraseña no es correcta",
  E_ARTICULO_ANADIDO=>"El artículo se añadió correctamente",
  E_FALTAN_DATOS=>"Faltan datos",
  E_CARRITO_ACTUALIZADO=>"Se actualizó el carrito correctamente"
);


function conectarBD(){
    return new mysqli(DATOS_BD["servidor"],DATOS_BD["usuario"],DATOS_BD["password"],DATOS_BD["bd"]);
}


function obtenermensaje()
{
    $mensaje = "";
    if (isset($_SESSION["mensaje"]) && $_SESSION["mensaje"] != E_SIN_ERROR) {
        $mensaje = ARRAY_MENSAJES[$_SESSION["mensaje"]];
        $_SESSION["mensaje"] = "";
    }
    return $mensaje;
}
?>

