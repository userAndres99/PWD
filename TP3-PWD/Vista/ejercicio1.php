<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>
    <h2>Subir un archivo</h2>
    <form method="post" action="Action/ActionEj1.php" enctype="multipart/form-data">
        <label for="archivo">Seleccione un archivo (.doc o .pdf):</label>
        <input type="file" name="archivo" id="archivo" required>
        <br><br>
        <input type="submit" value="Subir Archivo">
    </form>
</body>
</html>