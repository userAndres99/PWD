<?php
include_once "../../Utils/funciones.php";
include_once "../../Control/verdatos.php";


// Obtener los datos enviados
$datos = darDatosSubmitted();

// Crear instancia del objeto DatosControl
$control = new Datos();

// Procesar los datos
$mensajeEdad = $control->procesarEdad($datos); // Método para verificar edad
$nivelEstudios = $control->obtenerNivelEstudio($datos); // Método para obtener nivel de estudios
$sexo = $control->obtenerSexo($datos); // Método para obtener sexo

// Construir el mensaje final
$mensajeFinal = "Hola, " . $datos['nombre'] . " " . $datos['apellido'] . ". " . $mensajeEdad . 
                " Tienes " . $nivelEstudios . " y tu sexo es " . $sexo . ".";
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
        <a href="../ejercicio5.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
