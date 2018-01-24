<?php
const E_CONEXION=1;
const E_INSTRUCCION=2;
const E_REPETIDA=3;
const E_NO_BORRAR=4;
const E_NO_PALABRA=5;

$msg_error=array(
    E_CONEXION=>"Error al conectar con la base de datos",
    E_INSTRUCCION=>"Error en la instrucción",
    E_REPETIDA=>"Palabra repetida",
    E_NO_BORRAR=>"No se pudo borrar",
    E_NO_PALABRA=>"Debe enviarse una palabra o frase"
);

?>