<?php
include_once "../../Control/ControlArchivo.php";
include_once "../../Utils/funciones.php";

// Recuperar el archivo subido
$file = $_FILES['archivo'];

$mensaje = '';
$archivoUrl = '';

if ($file) {
    $control = new ControlArchivo();

    // Validar el archivo usando el objeto ControlArchivo
    $resultado = $control->validarArchivo($file);

    if ($resultado) {
        // El archivo es válido, ahora usar darArchivoSubmitted para manejar la carga
        $mensaje = SubirArchivoSubmitted();
        
        // Construir URL del archivo subido
        $archivoNombre = $file['name'];
        $archivoUrl = '../../Archivos/' . $archivoNombre;
        $mensaje .= '<br>ir al archivo  <a href="' . $archivoUrl . '">este enlace</a>.';
    } else {
        // Mostrar el mensaje de error
        $mensaje = 'Error: No se pudo validar el archivo.';
    }
} else {
    $mensaje = 'No se ha subido ningún archivo.';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado de la Carga del Archivo</h1>
        <div class="alert alert-info mt-4">
            <?php echo $mensaje; ?>
        </div>
        <a href="../ejercicio1.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>