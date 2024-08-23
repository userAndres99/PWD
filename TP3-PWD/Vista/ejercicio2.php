<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo TXT</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="h4">Consigna</h1>
            </div>
            <div class="card-body">
                <p>Crear un formulario que permita subir un archivo. En el servidor se deberá controlar que el tipo 
                    esperado sea .txt (texto plano). Si es correcto, deberá abrir el archivo y mostrar su contenido en un 
                    textarea.
                </p>
                <h2 class="h5 mt-4">Subir un archivo de texto</h2>
                <form method="post" action="Action/ActionEj2.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="archivo" class="form-label">Seleccione un archivo de texto (.txt):</label>
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