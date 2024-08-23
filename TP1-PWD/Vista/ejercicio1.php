
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Formulario</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <!-- Incluir jQuery -->
        <script src="../Utils/jquery-3.7.1.js"></script>
            <!-- Incluir el archivo de validaciones -->
    <script src="../Utils/validaciones.js"></script>
</head>
<!-- bg-light un fondo claro-->
<body class="bg-light">

    <!--mt-5 es para un margen superior de 5-->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="h4">Consigna</h1>
            </div>
            <div class="card-body">
                <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe 
                    llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número 
                    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la 
                    respuesta, que permita volver a la página anterior.
                </p>
                <h1 class="h5">Ingrese un número</h1>
                
                <!--el novalidate desactiva la validaciones de html5 para probar jquery -->
                <form id="formEj1" name="formEj1" method="get" action="Action/actionEj1.php" >
                    <div class="form-group">
                        <label for="numero_form">Número:</label>
                        <!-- Input para solicitar el número -->
                        <input name="numero_form" type="number" id="numero_form" class="form-control" required step="1" min="-1000000" max="1000000" />
                    </div>
                    <br />
                    <!-- Botón para enviar el formulario -->
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
        
    </div>
    <div class="mt-4 p-5">
        <a href="../../Menu.php" class="btn btn-secondary">Volver al menú</a>
    </div>
    
    
    <!-- Enlace a Bootstrap-->
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

