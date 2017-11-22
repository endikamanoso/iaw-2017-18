<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lectura del código hexadecimal</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
</head>
<body>
<main class="container">
    <div class="row justify-content-center">
        <div class="col-6 col-xs-12 text-center">
            <h1>Escribe el código (Unicode) para el carácter Árabe</h1>
            <form action="mostrar-codigo.php" method="get">
                <label for="codigo">
                    Introduzca 4 dígitos hexadecimales entre el 0600 y el 06FF
                </label><br>
                <input type="text" name="codigo" id="codigo" maxlength="4" size="4" class="form-control"><br>
                <button class="btn btn-lg">Comprobar</button>
            </form>
        </div>
    </div>
</main>
</body>
</html>