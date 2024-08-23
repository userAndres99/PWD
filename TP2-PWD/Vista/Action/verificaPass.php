<?php
// Incluir los archivos necesarios
include_once "../../Control/LoginControl.php";
include_once "../../Utils/funciones.php";

// Recuperar los datos del formulario
$datos = darDatosSubmitted();

// Crear una instancia de LoginControl
$loginControl = new LoginControl();

// Verificar si las credenciales son válidas
$esValido = $loginControl->verificarUsuario($datos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Login</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultado del Login</h1>
        <div class="alert <?php echo $esValido ? 'alert-success' : 'alert-danger'; ?> mt-4">
            <?php
            if ($esValido) {
                // Mensaje de bienvenida si las credenciales son correctas
                echo 'Bienvenido, ' . $datos['usuario'] . '!';
            } else {
                // Mensaje de error si las credenciales son incorrectas
                echo 'Usuario o clave incorrectos.';
            }
            ?>
        </div>
        <a href="../ejercicio3.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>


