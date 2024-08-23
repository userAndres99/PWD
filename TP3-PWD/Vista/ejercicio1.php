<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="h4">Consigna</h1>
            </div>
            <div class="card-body">
                <p>Crear un formulario HTML que permita subir un archivo. En el servidor se deberá controlar, 
                    antes de guardar el archivo, que los tipos válidos son .doc o .pdf y además el tamaño máximo 
                    permitido es de 2MB. En caso que se cumplan las condiciones, mostrar un link al archivo cargado; en caso 
                    contrario, mostrar un mensaje indicando el problema.
                </p>
                <h2 class="h5 mt-4">Subir un archivo</h2>
                <form method="post" action="Action/ActionEj1.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="archivo" class="form-label">Seleccione un archivo (.doc o .pdf):</label>
                        <input type="file" name="archivo" id="archivo" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Subir Archivo</button>
                </form>
                <div class="mt-4">
                    <a href="../../Menu.php" class="btn btn-secondary">Volver al menú</a>
                </div>
            </div>
        </div>
    </div>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>