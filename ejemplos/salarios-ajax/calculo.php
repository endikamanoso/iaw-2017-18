<?php
foreach ($_GET as $clave => $valor) {
    $$clave = $valor;
}
header('Content-type: text/xml');
echo "<?xml version='1.0' encoding='utf-8'?>";
echo "<respuesta>";
if (isset($nombre) == false ||
    isset($apellidos) == false ||
    isset($edad) == false ||
    isset($salario) == false) {
    echo "<error>Faltan datos</error>";
} else {
    if ($nombre == "" || $apellidos == "" || $edad == "" || $salario == "") {
        echo "<error>Faltan rellenar columnas</error>";
    } else {
        if ($salario < 1000) {
            if ($edad < 30) $salario = 1100;
            elseif ($edad <= 45) $salario *= 1.03;
            else $salario *= 1.15;
        } elseif ($salario <= 2000) {
            if ($edad > 45) $salario *= 1.03;
            if ($edad <= 45) $salario *= 1.1;
        }
        echo "<salario>$salario</salario>";
    }
}
echo "</respuesta>";
?>
