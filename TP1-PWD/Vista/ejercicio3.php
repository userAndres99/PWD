<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Formulario</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <!-- Incluir jQuery -->
    <script src="../Utils/jquery-3.7.1.js"></script>
    <!-- Incluir archivo de validaciones -->
    <script src="../Utils/validaciones.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
    <div class="card-header">
        <h1 class="h4">Consigna</h1>
    </div>
    <p>
        Crear una página PHP que contenga un formulario HTML como el que se indica en la 
        imagen (darle formato con CSS). Enviar estos datos por el método POST a otra página PHP 
        que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy 
        nombre, apellido, tengo edad años y vivo en dirección”, usando la información recibida. 
        Cambiar el método POST por GET y analizar las diferencias.
    </p>
        <h1 class="text-center mb-4">Complete el Formulario</h1>
        <form id="formEj3y4" name="formEj3y4" method="post" action="Action/actionEj3.php" >
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input name="nombre" type="text" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input name="apellido" type="text" id="apellido" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input name="edad" type="number" id="edad" class="form-control" required min="0">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input name="direccion" type="text" id="direccion" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>
        
    </div>
    <div class="mt-4 p-5">
        <a href="../../Menu.php" class="btn btn-secondary">Volver al menú</a>
    </div>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>