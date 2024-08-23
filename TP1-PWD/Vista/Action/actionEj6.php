<?php
include_once "../../Utils/funciones.php";
include_once "../../Control/verdatos.php";

// Obtener los datos enviados
$datos = darDatosSubmitted();

$control=new Datos();

// Determinar el mensaje sobre la mayoría de edad
$mensajeEdad=$control->procesarEdad($datos);

// Determinar el mensaje sobre el nivel de estudios
$mensajeEstudios=$control->obtenerNivelEstudio($datos);

// Contar la cantidad de deportes seleccionados
$deportes = $control->contarDeportes($datos);

$mensajeDeportes = "Practicas " . $deportes . " deportes.";

// Crear el mensaje final
$mensajeFinal = "Hola, " . $datos['nombre'] . " " . $datos['apellido'] . ". " . $mensajeEdad . " " . $mensajeEstudios . " " . $mensajeDeportes;
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
            <?php echo $mensajeFinal; ?>
        </div>
        <a href="../ejercicio6.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>