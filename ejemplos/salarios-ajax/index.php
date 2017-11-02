<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Cálculo de salario</title>
    <link rel="stylesheet" href="../librerias/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron text-center">
    <h1 class="display-3">CÁLCULO DE SALARIO</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12">
            <form action="calculo.php" id="form">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                </div>
                <div class="form-group">
                    <label for="salario">Salario (en euros)</label>
                    <input type="number" class="form-control" id="salario" name="salario" step="0.01">
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" min="18">
                </div>
                <button class="btn btn-primary btn-block btn-lg" id="btEnvio">
                    CALCULAR
                </button>
            </form>
        </div>
    </div>
</main>
<footer class="container">
    <div class="row">
        <div class="col-12">
            &nbsp;
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12" id="resultado">

        </div>
    </div>

</footer>
<script src="../librerias/js/jquery-3.2.1.min.js"></script>
<script>
    $(function(){
        $("#btEnvio").on("click",function(e){
            e.preventDefault();
            $("#resultado").empty();
            var jqxhr=$.ajax({
                url:"calculo.php",
                method:"GET",
                data:$("#form").serialize(),
                dataType:"xml"
            });
            jqxhr.done(function(data){
                if($(data).find("error").length>0){
                    var errores=$(data).find("error");
                    errores.each(function(i){
                        $("#resultado").append("<p class='alert alert-danger'>"+$(this).text()+"</p>");
                    })
                }
                else if($(data).find("salario").length>0){
                    var salario=$(data).find("salario");
                    $("#resultado").append("<p class='alert alert-success'>Tu nuevo salario es de "+salario.text()+"&euro;</p>");
                }
            })
        });
    });
</script>
</body>
</html>