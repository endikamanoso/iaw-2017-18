<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Cálculo de salario</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron text-center">
    <h1 class="display-3">CÁLCULO DE SALARIO</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12">
            <form action="calculo.php">
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
                <button class="btn btn-primary btn-block btn-lg">
                    CALCULAR
                </button>
            </form>
        </div>
    </div>
</main>
</body>
</html>