
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Formulario</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <!-- Incluir jQuery -->
    <script src="../Utils/jquery-3.7.1.js"></script>
    <!-- Incluir archivo de validaciones -->
    <script src="../Utils/validaciones.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Ingrese las Horas de Cursada</h1>
        <form id="formEj2" name="formEj2" method="get" action="Action/actionEj2.php"  >
            <div class="mb-3">
                <label for="lunes">Lunes:</label>
                <input name="lunes" type="number" id="lunes" class="form-control" required step="1" min="0" max="24">
            </div>
            <div class="mb-3">
                <label for="martes">Martes:</label>
                <input name="martes" type="number" id="martes" class="form-control" required step="1" min="0" max="24">
            </div>
            <div class="mb-3">
                <label for="miercoles">Miércoles:</label>
                <input name="miercoles" type="number" id="miercoles" class="form-control" required step="1" min="0" max="24">
            </div>
            <div class="mb-3">
                <label for="jueves">Jueves:</label>
                <input name="jueves" type="number" id="jueves" class="form-control" required step="1" min="0" max="24">
            </div>
            <div class="mb-3">
                <label for="viernes">Viernes:</label>
                <input name="viernes" type="number" id="viernes" class="form-control" required step="1" min="0" max="24">
            </div>
            <div class="mb-3">
                <label for="sabado">Sábado:</label>
                <input name="sabado" type="number" id="sabado" class="form-control" step="1" min="0" max="24">
            </div>
            <div class="mb-3">
                <label for="domingo">Domingo:</label>
                <input name="domingo" type="number" id="domingo" class="form-control" step="1" min="0" max="24">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Aceptar</button>
        </form>
    </div>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

