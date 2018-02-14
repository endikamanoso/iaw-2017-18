<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<select name="provincia" id="provincia">
<?php
$mysqli=new mysqli("localhost","geografia","geografia","geografia");

if($mysqli->connect_error){
    echo "<option>Error de conexión</option>";
}
else{
    $sql="select n_provincia,nombre from provincias order by nombre";
    $res=$mysqli->query($sql);
    if($mysqli->error){
        echo "<option>Error </option>";
    }
    else{
        $fila=$res->fetch_assoc();
        while($fila){
            $n_provincia=$fila["n_provincia"];
            $nombre=$fila["nombre"];
            echo "<option value='$n_provincia'>$nombre</option>";
            $fila=$res->fetch_assoc();
        }
        $res->close();
    }
    $mysqli->close();
}

?>
</select>
<br>
<select name="localidades" id="localidades">

</select>
<script src="../../librerias/js/jquery-3.2.1.min.js"></script>
<script>
    $(function(){
        $("#provincia").on("change",function(e){
            var jqxhr=$.ajax({
                method:"get",
                url:"localidades.php",
                data:{
                    provincia:$("#provincia").val()
                },
                dataType:"json"
            });

            jqxhr.done(function(data){
                console.log(data);
            })
        })
    })
</script>
</body>
</html>