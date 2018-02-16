<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron">
    <h1 class="display-4">Obtener datos geográficos</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <form action="obtenerProvincias.php">
            <div class="form-group">
                <label for="comunidad">Comunidades</label>
                <select name="comunidad" id="comunidad">
                    <option disabled selected>Elija la comunidad</option>
                    <?php
                    include "errores.php";
                    $error = 0;
                    $mysqli = new mysqli("localhost", "geografia", "geografia", "geografia");
                    if ($mysqli->connect_errno == true) {
                        $error = E_BASE_DATOS_GENERAL;
                    } else {
                        $sql = "SELECT id_comunidad, nombre FROM comunidades ORDER BY nombre";
                        $res = $mysqli->query($sql);
                        if ($mysqli->errno) {
                            $error = E_BASE_DATOS_EJECUCION;
                        } else {
                            $fila = $res->fetch_assoc();
                            while ($fila) {
                                $id_comunidad = $fila["id_comunidad"];
                                $nombre = $fila["nombre"];
                                echo "<option value='$id_comunidad'>" .
                                    "$nombre</option>";
                                $fila = $res->fetch_assoc();
                            }
                            echo "],\n";  //fin de la lista de provincias
                            $res->close();
                        }
                    }
                    $mysqli->close();

                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="provincia">Provincias</label>
                <select name="provincia" id="provincia">

                </select>
            </div>
            <button>Enviar</button>
        </form>
    </div>
</main>


<script src="../../librerias/js/jquery-3.2.1.min.js"></script>
<script>
    $(function () {
        $("#comunidad").on("change", function (e) {
            $("#provincia").empty();
            var jqxhr = $.ajax({
                url: "obtenerProvincias.php",
                method: "get",
                dataType: "json",
                data: {
                    comunidad: $("#comunidad").val()
                }
            });
            jqxhr
                .done(function (data) {
                    var provincias = data["provincias"];
                    for (var provincia of provincias) {
                        $("#provincia")
                            .append(
                                "<option value='" + provincia["n_provincia"] + "'>" +
                                provincia["nombre"]+"</option>"
                            )
                    }

                })
                .fail(function (jqXHR, textStatus) {
                    console.log("error " + textStatus);
                })
        });
    })
</script>
</body>
</html>