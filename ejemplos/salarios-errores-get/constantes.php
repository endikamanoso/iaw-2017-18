<?php
const E_FALTA_NOMBRE=1;
const E_FALTA_APELLIDOS=2;
const E_FALTA_EDAD=4;
const E_FALTA_SALARIO=8;
const E_NOMBRE_VACIO=16;
const E_APELLIDOS_VACIO=32;
const E_EDAD_VACIO=64;
const E_SALARIO_VACIO=128;

$msg_error=array(
    E_FALTA_NOMBRE=>"No se ha envíado nombre alguno",
    E_FALTA_APELLIDOS=>"No se han enviado apellidos",
    E_FALTA_EDAD=>"No se ha enviado la edad",
    E_FALTA_SALARIO=>"No se ha enviado salario",
    E_NOMBRE_VACIO=>"No se ha rellenado el nombre",
    E_APELLIDOS_VACIO=>"No se han rellenado los apellidos",
    E_EDAD_VACIO=>"No se ha rellenado la edad",
    E_SALARIO_VACIO=>"No se ha rellenado el salario"
);
?>