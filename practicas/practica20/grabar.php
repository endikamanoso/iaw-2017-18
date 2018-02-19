<?php
if(isset($_GET["tarea"])) {
    $mysqli = new mysqli("localhost", "tareas", "12345", "tareas");
    if ($mysqli->connect_errno==false) {
        $sql="INSERT INTO tareas(nombre,acabada) VALUES('".$_GET["tarea"]."',false)";
        $mysqli->query($sql);
        $mysqli->close();
    }
}
header("Location:index.php");
?>
