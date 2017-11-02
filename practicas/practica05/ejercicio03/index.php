<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Comprobación numérica</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
</head>
<body>
<header class="jumbotron">
    <h1 class="display-3">COMPROBACIÓN NUMÉRICA</h1>
</header>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12">
            <form action="comprobacion.php">
                <div class="form-group">
                    <label for="n">Escribe un número</label>
                    <input type="number" class="form-control" id="n" name="n" step="0.000001">
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