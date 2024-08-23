
<?php

    include_once "../../Control/vernumero.php";
    include_once "../../Utils/funciones.php";
    //las tareas que van a ir en la carpeta action es recuperar los datos de la interfaz
    //en este caso seria solo el numero el que se tiene que recuperar

    $datos=darDatosSubmitted();

    $obj = new Numero();

    $mensaje=$obj->devolverSigno($datos);

    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
</head>
<body>
<body>
                <!-- el MT-5 es para un margin top 5-->
    <div class="container mt-5">

        <!-- TEXT-CENTER es para centrar el texto -->
        <h1 class="text-center">Número Ingresado</h1>

         <!--el ALERT define el estilo base de un mensaje de alerta-->
         <!--el ALERT-INFO un estilo específico para alertas de tipo "informativo"-->
         <!--el MT-4 Esta clase aplica un margen superior de tamaño 4-->
        <div class="alert alert-info mt-4" >

            <?php echo "El número ingresado es: <strong>$mensaje</strong>"; ?>

        </div>

        <!--un boton primary de bootstrap con un margen superior de 4-->
        <a href="../ejercicio1.php" class="btn btn-primary mt-4">Volver al formulario</a>
    </div>
    
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>

