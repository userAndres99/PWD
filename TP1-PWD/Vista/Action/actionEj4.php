
<?php
include_once "../../Utils/funciones.php";
include_once "../../Control/verdatos.php";

// Obtener los datos enviados
$datos = darDatosSubmitted();

// Crear una instancia del controlador
$controlador = new datos();

// Procesar los datos y obtener el mensaje
$mensaje = $controlador->procesarEdad($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Verificación</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="alert alert-info mt-4" role="alert">
            <?php echo $mensaje; ?>
        </div>
        <a href="../ejercicio4.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>