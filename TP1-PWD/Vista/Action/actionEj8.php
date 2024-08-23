<?php
include_once "../../Utils/funciones.php";
include_once "../../Control/tarifa.php";

// Obtener los datos enviados
$datos = darDatosSubmitted();

$tarifa= new Tarifa();

$precio=$tarifa->calculo($datos);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Cálculo</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Precio de la Entrada</h1>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo "El precio de tu entrada es: $" . $precio; ?>
        </div>
        <a href="../ejercicio8.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>