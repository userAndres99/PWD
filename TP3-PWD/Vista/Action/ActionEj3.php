<?php
include_once "../../Control/ControlImagenEj3.php";
include_once "../../Utils/funciones.php";

// datos del formulario y del archivo
$datos = darDatosSubmitted();
$control=new ControlArchivo();
// Guardar el archivo y obtener el mensaje


// Verificar si el archivo existe en los datos
if ($datos['imagen']) {
    // Validar el archivo
    $valido = $control->validarArchivo($datos['imagen']);

    if ($valido) {
        // Guardar el archivo
        $mensajeArchivo = SubirImagenSubmitted();
    } else {
        $mensajeArchivo = "no se pudo cargar la imagen ya que no es valida";
    }
} else {
    $mensajeArchivo = "No se ha subido ningún archivo";
}

// Mostrar los datos del formulario
$mensaje = $mensajeArchivo;
$mensaje .= '<div class="alert alert-success" role="alert">';
$mensaje .= '<h4 class="alert-heading">La película introducida es</h4>';
$mensaje .= '<p><strong>Título:</strong> ' . $datos['titulo'] . '</p>';
$mensaje .= '<p><strong>Actores:</strong> ' . $datos['actores'] . '</p>';
$mensaje .= '<p><strong>Director:</strong> ' . $datos['director'] . '</p>';
$mensaje .= '<p><strong>Guion:</strong> ' . $datos['guion'] . '</p>';
$mensaje .= '<p><strong>Producción:</strong> ' . $datos['produccion'] . '</p>';
$mensaje .= '<p><strong>Año:</strong> ' . $datos['ano'] . '</p>';
$mensaje .= '<p><strong>Nacionalidad:</strong> ' . $datos['nacionalidad'] . '</p>';
$mensaje .= '<p><strong>Género:</strong> ' . $datos['genero'] . '</p>';
$mensaje .= '<p><strong>Duración:</strong> ' . $datos['duracion'] . ' minutos</p>';
$mensaje .= '<p><strong>Restricción de Edad:</strong> ' . $datos['restriccion'] . '</p>';

// Mostrar la imagen cargada si existe
if (isset($datos['imagen']['name'])) {
    $imagenPath = '../../Archivos/Imagenes/' . $datos['imagen']['name'];
    if (file_exists($imagenPath)) {
        $mensaje .= '<p><strong>Imagen:</strong><br><img src="' . $imagenPath . '" alt="Imagen de la película" style="max-width: 100%; height: auto;"></p>';
    }
}

$mensaje .= '</div>';
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
        <?php echo $mensaje; ?>
        <a href="../ejercicio3.php" class="btn btn-secondary mt-3">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>