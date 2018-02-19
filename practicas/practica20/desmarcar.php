<?php
if(isset($_GET["id"])) {
    $mysqli = new mysqli("localhost", "tareas", "12345", "tareas");
    if ($mysqli->connect_errno==false) {
        $sql="UPDATE tareas SET acabada=0 WHERE id_tarea=".$_GET["id"];
        $mysqli->query($sql);
        $mysqli->close();
    }
}
header("Location:index.php");
?>
