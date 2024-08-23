<?php
include_once "../../Utils/funciones.php";

// Recuperar los datos del formulario
$datos = darDatosSubmitted();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - Cinem@s</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">La película introducida es</h4>
            <p><strong>Título:</strong> <?php echo $datos['titulo']; ?></p>
            <p><strong>Actores:</strong> <?php echo $datos['actores']; ?></p>
            <p><strong>Director:</strong> <?php echo $datos['director']; ?></p>
            <p><strong>Guion:</strong> <?php echo $datos['guion']; ?></p>
            <p><strong>Producción:</strong> <?php echo $datos['produccion']; ?></p>
            <p><strong>Año:</strong> <?php echo $datos['ano']; ?></p>
            <p><strong>Nacionalidad:</strong> <?php echo $datos['nacionalidad']; ?></p>
            <p><strong>Género:</strong> <?php echo $datos['genero']; ?></p>
            <p><strong>Duración:</strong> <?php echo $datos['duracion']; ?> minutos</p>
            <p><strong>Restricción de Edad:</strong> <?php echo $datos['restriccion']; ?></p>
        </div>
        <a href="../ejercicio4.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>