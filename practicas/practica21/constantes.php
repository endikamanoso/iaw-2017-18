<?php
const CLAVE="djskh1234324fdhsjdfjhfds";

const E_SIN_ERROR=0;
const E_YA_VOTADO=1;
const E_ACCESO_INDEBIDO=2;
const E_BD_SIN_CONEXION=3;
const E_BD_INSTRUCCION=4;
const E_FALTAN_DATOS=5;
const E_DATOS_INCORRECTOS=6;

const MENSAJES=array(
    E_SIN_ERROR=>"No hay errores",
    E_YA_VOTADO=>"Ya se ha votado en esta sesión",
    E_ACCESO_INDEBIDO=>"Acceso indebido",
    E_BD_SIN_CONEXION=>"No hay conexion con la base de datos",
    E_BD_INSTRUCCION=>"Fallo al ejecutar la instrucción en la base de datos",
    E_FALTAN_DATOS=>"Faltan datos",
    E_DATOS_INCORRECTOS=>"Datos incorrectos"
);

const DATOS_BD=array(
    "servidor"=>"localhost",
    "usuario"=>"bicis",
    "password"=>"12345",
    "bd"=>"bicis"
);

function conectarBD(){
    return new mysqli(DATOS_BD["servidor"],DATOS_BD["usuario"],DATOS_BD["password"],DATOS_BD["bd"]);
}





?>