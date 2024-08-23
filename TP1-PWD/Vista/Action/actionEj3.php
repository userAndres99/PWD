<?php

    include_once "../../Control/verdatos.php";
    include_once "../../Utils/funciones.php";

    $datos = darDatosSubmitted();

    $obj = new Datos();
    $mensaje = $obj->mostrarDatos($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Resultados del Formulario</h1>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo $mensaje; ?>
        </div>
        <a href="../ejercicio3.php" class="btn btn-primary mt-3">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>