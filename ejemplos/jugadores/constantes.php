<?php
const E_NO_HAY_DATOS=1;
const E_NO_SON_NUMEROS=2;
const E_MESSI_MAL=4;
const E_RONALDO_MAL=8;
const E_GRIEZMANN_MAL=16;
const E_SUMAL_MAL=32;

$mensajes=array(
    E_NO_HAY_DATOS=>"No hay datos",
    E_SUMAL_MAL=>"La suma de porcentajes no es <strong>correcta</strong>",
    E_RONALDO_MAL=>"Los valores de Ronaldo no son correctos",
    E_MESSI_MAL=>"Los valores de Messi no son correctos",
    E_GRIEZMANN_MAL=>"Los valores de Griezmann no son correctos",
    E_NO_SON_NUMEROS=>"Hay valores no numéricos"
);

const E_ULTIMO_ERROR=32;

?>