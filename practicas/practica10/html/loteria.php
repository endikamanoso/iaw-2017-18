<?php
header("Content-type: text/html");
echo "<h2>Premios</h2>";
echo "<p><strong>Primero (400000 &euro;): </strong>".mt_rand(0,99999)."</p>";
echo "<p><strong>Segundo (125000 &euro;): </strong>".mt_rand(0,99999)."</p>";
echo "<p><strong>Tercero (50000 &euro;): </strong>".mt_rand(0,99999)."</p>";
echo "<p><strong>Cuarto (20000 &euro;): </strong>";
for($i=1;$i<=2;$i++){
    echo mt_rand(0,99999)." ";
}
echo "<p><strong>Quinto (6000 &euro;): </strong>";
for($i=1;$i<=8;$i++){
    echo mt_rand(0,99999)." ";
}
?>