<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<form action="grabar.php">
    <label for="tarea">Nombre de tarea</label>
    <input type="text" name="tarea" id="tarea">
    <button>Añadir</button>
</form>
<?php
$mysqli=new mysqli("localhost","tareas","12345","tareas");
if($mysqli->connect_errno==false){
    $sql="SELECT * FROM tareas";
    $res=$mysqli->query($sql);
    if($res){
        if($res->num_rows>0){
            echo "<h1>Lista de tareas actuales</h1>";
            echo "<ul>";
            $fila=$res->fetch_assoc();
            while($fila){
                echo "<li>";
                if($fila["acabada"]==1) echo "<s>";
                echo $fila["nombre"]."<br>";
                if($fila["acabada"]==1) {
                    echo "</s>";
                    echo " <a href='desmarcar.php?id=".$fila["id_tarea"]."'>Desmarcar</a> ";
                }
                else {
                    echo " <a href='marcar.php?id=".$fila["id_tarea"]."'>Marcar como completada</a> ";
                }
                echo "<a href='borrar.php?id=".$fila["id_tarea"]."'>Borrar</a> ";
                echo "</li><br>";
                $fila=$res->fetch_assoc();
            }
            echo "</ul>";
        }
        $res->close();
    }
    $mysqli->close();

}

?>
</body>
</html>