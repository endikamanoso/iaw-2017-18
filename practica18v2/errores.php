<?php
const E_SIN_ERROR=0;
const E_SIN_PARAMETROS=1;
const E_COMUNIDAD_NO_VALIDA=2;
const E_PROVINCIA_NO_VALIDA=3;
const E_COMUNIDAD_NO_NUMERICA=4;
const E_PROVINCIA_NO_NUMERICA=5;
const E_BASE_DATOS_GENERAL=6;
const E_BASE_DATOS_EJECUCION=7;


const MENSAJES_ERROR=array(
    E_SIN_ERROR=>"No hay errores",
    E_SIN_PARAMETROS=>"No se han enviado parámetros",
    E_COMUNIDAD_NO_VALIDA=>"No existe esa comunidad",
    E_PROVINCIA_NO_VALIDA=>"No existe esa provincia",
    E_COMUNIDAD_NO_NUMERICA=>"La comunidad tiene que ser un número",
    E_PROVINCIA_NO_NUMERICA=>"La provincia tiene que ser un número",
    E_BASE_DATOS_GENERAL=>"Error al acceder a la base de datos",
    E_BASE_DATOS_EJECUCION=>"Error al ejecutar instrucciones en la base de datos"
)
?>