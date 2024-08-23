<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Cálculo de Entradas</title>
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
        La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en 
        función de la edad y de la condición de estudiante del cliente. Desea que sean los propios 
        clientes los que puedan calcular el valor de sus entradas a través de una página web. Si 
        es estudiante o menor de 12 años, el precio es de $160; si es estudiante y mayor o igual 
        a 12 años, el precio es de $180; en cualquier otro caso, el precio es de $300. Diseñar un 
        formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con 
        un botón, enviar los datos a un script encargado de realizar el cálculo y visualizarlo. 
        Agregar un botón para limpiar el formulario y volver a consultar.
    </p>
        <h1 class="text-center">Calcula el Precio de tu Entrada</h1>
        <form id="formEj8" name="formEj8" method="get" action="Action/actionEj8.php" >
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input name="edad" type="number" id="edad" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="estudiante" class="form-label">¿Eres estudiante?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estudiante" id="estudiante_si" value="si" required>
                    <label class="form-check-label" for="estudiante_si">Sí</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estudiante" id="estudiante_no" value="no" required>
                    <label class="form-check-label" for="estudiante_no">No</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
            <button type="reset" class="btn btn-secondary">Limpiar</button>
        </form>
    </div>
    <div class="mt-4 p-5">
        <a href="../../Menu.php" class="btn btn-secondary">Volver al menú</a>
    </div>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>