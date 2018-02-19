<?php
if(isset($_GET["id"])) {
    $mysqli = new mysqli("localhost", "tareas", "12345", "tareas");
    if ($mysqli->connect_errno==false) {
        $sql="DELETE FROM tareas WHERE id_tarea=".$_GET["id"];
        $mysqli->query($sql);
        $mysqli->close();
    }
}
header("Location:index.php");
?>