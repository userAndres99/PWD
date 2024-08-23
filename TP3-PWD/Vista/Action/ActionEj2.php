<?php
include_once "../../Control/ControlArchivoEj2.php";
include_once "../../Utils/funciones.php";

// Recuperar el archivo subido
$file = $_FILES['archivo'];

$mensaje = '';
$contenido = '';

if ($file) {
    $control = new ControlArchivo();

    // Validar el archivo usando el objeto ControlArchivo
    $resultado = $control->validarArchivo($file);

    if ($resultado) {
        // El archivo es válido, se usa SubirArchivoSubmitted para manejar la carga
        $mensaje = SubirArchivoSubmitted();
        
        // Leer el contenido del archivo
        // file_get_contents lee el contenido de un archivo y devolverlo como una cadena
        $contenido = file_get_contents('../../Archivos/' . $file['name']);
        // Mostrar el contenido en un textarea
        $mensaje .= '<br>Contenido del archivo:';
    } else {
        // Mostrar el mensaje de error
        $mensaje = 'Error: El archivo no es de tipo .txt o no se pudo validar.';
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
    <title>Resultado de la Carga del Archivo</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado de la Carga del Archivo</h1>
        <div class="alert alert-info mt-4">
            <p><?php echo $mensaje; ?></p>
            <?php if ($contenido): ?>
                <textarea rows="10" cols="80" readonly><?php echo $contenido; ?></textarea>
            <?php endif; ?>
        </div>
        <a href="../ejercicio2.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>