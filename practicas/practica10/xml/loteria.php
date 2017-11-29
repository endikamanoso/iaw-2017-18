<?php
header("Content-type: text/xml");
echo "<premios>";
    echo "<premio tipo='primero' cantidad='400000'><numero>".mt_rand(0,99999)."</numero></premio>";
    echo "<premio tipo='segundo' cantidad='125000'><numero>".mt_rand(0,99999)."</numero></premio>";
    echo "<premio tipo='tercero' cantidad='50000'><numero>".mt_rand(0,99999)."</numero></premio>";
    echo "<premio tipo='cuarto' cantidad='20000'>";
        for($i=1;$i<=2;$i++){
            echo "<numero>".mt_rand(0,99999)."</numero>";
        }
    echo "</premio>";
    echo "<premio tipo='quinto' cantidad='6000'>";
        for($i=1;$i<=8;$i++){
            echo "<numero>".mt_rand(0,99999)."</numero>";
        }
    echo "</premio>";
echo "</premios>";
?>