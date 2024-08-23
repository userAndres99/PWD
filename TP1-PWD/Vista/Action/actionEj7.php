<?php
include_once "../../Utils/funciones.php";
include_once "../../Control/calculadora.php";

// Obtener los datos enviados
$datos = darDatosSubmitted();

$calcular=new calculadora ();

switch ($datos['operacion']) {
    case 'suma':
        $resultado = $calcular->sumar($datos);

        break;
    case 'resta':
        $resultado = $calcular->resta($datos);

        break;
    case 'multiplicacion':
        $resultado = $calcular->multiplicacion($datos);

        break;
    default:
        $resultado = "Operación no válida";

        break;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Operación</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Resultado de la Operación</h1>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo "La operación seleccionada es: ". $datos['operacion']; ?><br>
            <?php echo "Operando 1: ".(float)$datos['numero1']; ?><br>
            <?php echo "Operando 2: ".(float)$datos['numero2']; ?><br>
            <?php echo "Resultado: $resultado"; ?>
        </div>
        <a href="../ejercicio7.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>