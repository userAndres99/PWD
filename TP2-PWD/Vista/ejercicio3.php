<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- jquery -->
    <script src="../Utils/jquery-3.7.1.js"></script>
    <!-- validaciones -->
    <script src="../Utils/Validaciones.js"></script>
</head>
<body>
    <div class="login-container">
        <h4 class="text-center">Member Login</h4>
        <form id="loginForm" name="loginForm" method="post" action="Action/verificaPass.php" >
            <div class="form-group">
                <img src="Assets/Imagenes/Personita.png" alt="User Icon" class="icon">
                <input name="usuario" type="text" id="usuario" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group mt-3">
                <img src="Assets/Imagenes/Candadito.png" alt="Password Icon" class="icon">
                <input name="clave" type="password" id="clave" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-login mt-4">Login</button>
            <!-- Contenedor para mensajes de error -->
            <div id="errorMessages" class="mt-3"></div>
        </form>
    </div>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>