<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Operaciones Matemáticas</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <!-- Incluir jQuery -->
    <script src="../Utils/jquery-3.7.1.js"></script>
    <!-- Incluir archivo de validaciones -->
    <script src="../Utils/validaciones.js"></script>    
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Operaciones Matemáticas</h1>
        <form id="formEj7" name="formEj7" method="get" action="Action/actionEj7.php" >
            <div class="mb-3">
                <label for="numero1" class="form-label">Número 1:</label>
                <input name="numero1" type="text" id="numero1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label">Número 2:</label>
                <input name="numero2" type="text" id="numero2" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="operacion" class="form-label">Operación:</label>
                <select name="operacion" id="operacion" class="form-select" required>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>