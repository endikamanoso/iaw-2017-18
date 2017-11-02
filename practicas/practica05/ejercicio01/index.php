<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jorge Sánchez">
    <title>Imagen aleatoria</title>
    <link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header class="jumbotron text-center">
    <h1 class="display-3">IMAGEN ALEATORIA</h1>
</header>
<figure id="imagen">
    <?php
    $n=mt_rand(1,2);
    echo "<img src='img/imagen$n.jpg' alt='Imagen'>";
    ?>
</figure>
<footer>
    <p>Imágenes obtenidas de <a href="https://unsplash.com">Unsplash</a><br>
    Autores: <a href="https://unsplash.com/@reo">Emre Gencer</a> y <a href="https://unsplash.com/@wistomsin">Tom Barret</a></p>
</footer>
</body>
</html>