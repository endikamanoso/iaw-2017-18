<?php
header("Content-type: application/json");
echo "{";
    echo "\"premios\":[";
        echo "{";
            echo "\"tipo\":\"primero\",";
            echo "\"cantidad\":400000,";
            echo "\"numeros\":[";
                echo mt_rand(0,99999);
            echo "]";
        echo "},";
        echo "{";
            echo "\"tipo\":\"segundo\",";
            echo "\"cantidad\":125000,";
            echo "\"numeros\":[";
                echo mt_rand(0,99999);
            echo "]";
        echo "},";
        echo "{";
            echo "\"tipo\":\"tercero\",";
            echo "\"cantidad\":50000,";
            echo "\"numeros\":[";
                echo mt_rand(0,99999);
            echo "]";
        echo "},";
        echo "{";
            echo "\"tipo\":\"cuarto\",";
            echo "\"cantidad\":20000,";
            echo "\"numeros\":[";
                echo mt_rand(0,99999);
                echo ",";
                echo mt_rand(0,99999);
            echo "]";
        echo "},";
        echo "{";
            echo "\"tipo\":\"cuarto\",";
            echo "\"cantidad\":6000,";
            echo "\"numeros\":[";
                echo mt_rand(0,99999);
                for($i=1;$i<=7;$i++) {
                    echo ",";
                    echo mt_rand(0, 99999);
                }
            echo "]";
        echo "}";
    echo "]";
echo "}";

?>