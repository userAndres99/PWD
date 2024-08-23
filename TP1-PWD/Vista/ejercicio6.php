<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Formulario</title>
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
        Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes 
        deportes que practica un alumno (fútbol, básquet, tenis, vóley). Mostrar en la página 
        que procesa el formulario la cantidad de deportes que practica.
    </p>
        <h1 class="text-center">Ingrese sus datos</h1>
        <form id="formEj6" name="formEj6" method="get" action="Action/actionEj6.php" >
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
                <label for="sexo" class="form-label">Sexo:</label>
                <div>
                    <input type="radio" id="masculino" name="sexo" value="Masculino" required>
                    <label for="masculino">Masculino</label>
                </div>
                <div>
                    <input type="radio" id="femenino" name="sexo" value="Femenino" required>
                    <label for="femenino">Femenino</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="nivelEstudio" class="form-label">Nivel de Estudio:</label><br>
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
                <label for="deportes" class="form-label">Deportes que practica:</label>
                <div>
                    <input type="checkbox" id="futbol" name="deportes[]" value="Fútbol">
                    <label for="futbol">Fútbol</label>
                </div>
                <div>
                    <input type="checkbox" id="basket" name="deportes[]" value="Basket">
                    <label for="basket">Basket</label>
                </div>
                <div>
                    <input type="checkbox" id="tennis" name="deportes[]" value="Tennis">
                    <label for="tennis">Tennis</label>
                </div>
                <div>
                    <input type="checkbox" id="voley" name="deportes[]" value="Voley">
                    <label for="voley">Voley</label>
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