<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Formulario</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
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
        Modificar el formulario del ejercicio anterior solicitando, con componentes “radio buttons”, 
        que se ingrese el nivel de estudio de la persona: 1 - no tiene estudios, 2 - estudios 
        primarios, 3 - estudios secundarios. Agregar el componente que creas más 
        apropiado para solicitar el sexo. En la página que procesa el formulario, mostrar además 
        un mensaje que indique el tipo de estudios que posee y su sexo.
    </p>
        <h1 class="text-center">Ingrese sus datos</h1>
        <form id="formEj5" name="formEj5" method="get" action="Action/actionEj5.php" >
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
                <input name="edad" type="number" id="edad" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input name="direccion" type="text" id="direccion" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nivel de Estudio:</label><br>
                <div>
                    <input type="radio" id="noEstudios" name="nivelEstudio" value="1" required>
                    <label for="noEstudios">No tiene estudios</label>
                </div>
                <div>
                    <input type="radio" id="estudiosPrimarios" name="nivelEstudio" value="2">
                    <label for="estudiosPrimarios">Estudios primarios</label>
                </div>
                <div>
                    <input type="radio" id="estudiosSecundarios" name="nivelEstudio" value="3">
                    <label for="estudiosSecundarios">Estudios secundarios</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Sexo:</label><br>
                <div>
                    <input type="radio" id="masculino" name="sexo" value="M" required>
                    <label for="masculino">Masculino</label>
                </div>
                <div>
                    <input type="radio" id="femenino" name="sexo" value="F">
                    <label for="femenino">Femenino</label>
                </div>
                <div>
                    <input type="radio" id="otro" name="sexo" value="O">
                    <label for="otro">Otro</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
    </div>
    <div class="mt-4 p-5">
        <a href="../../Menu.php" class="btn btn-secondary">Volver al menú</a>
    </div>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>