
<?php

function darDatosSubmitted() {
    $datos = [];

    // Recogemos datos de POST y GET
    foreach ($_GET as $key => $value) {
        $datos[$key] = $value;
    }
    foreach ($_POST as $key => $value) {
        $datos[$key] = $value;
    }
    // Añadimos los datos del archivo
    if ($_FILES['imagen']) {
        $datos['imagen'] = $_FILES['imagen'];
    }
    return $datos;
}




function SubirArchivoSubmitted() {
    $dir = '../../Archivos/'; // Definimos el Directorio donde se guarda el archivo
    $mensaje = ""; // Inicializamos la variable para almacenar el mensaje

    // Comprobamos que no se hayan producido errores
    if ($_FILES['archivo']["error"] <= 0) {
        $mensaje .= "Nombre: " . $_FILES['archivo']['name'] . "<br />";
        $mensaje .= "Tipo: " . $_FILES['archivo']['type'] . "<br />";
        $mensaje .= "Tamaño: " . ($_FILES['archivo']["size"] / 1024) . " kB<br />";
        $mensaje .= "Carpeta temporal: " . $_FILES['archivo']['tmp_name'] . "<br />";

        // Intentamos copiar el archivo al servidor.
        if (!copy($_FILES['archivo']['tmp_name'], $dir . $_FILES['archivo']['name'])) {
            $mensaje .= "ERROR: no se pudo cargar el archivo.";
        } else {
            $mensaje .= "El archivo " . $_FILES['archivo']['name'] . " se ha copiado con Éxito.<br />";
        }
    } else {
        $mensaje .= "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal.";
    }

    return $mensaje; // Devolvemos el mensaje
}

function SubirImagenSubmitted() {
    $dir = '../../Archivos/Imagenes/'; // Definimos el Directorio donde se guarda el archivo
    $mensaje = ""; // Inicializamos la variable para almacenar el mensaje

    // Comprobamos que no se hayan producido errores
    if ($_FILES['imagen']["error"] <= 0) {
        $mensaje .= "Nombre: " . $_FILES['imagen']['name'] . "<br />";
        $mensaje .= "Tipo: " . $_FILES['imagen']['type'] . "<br />";
        $mensaje .= "Tamaño: " . ($_FILES['imagen']["size"] / 1024) . " kB<br />";
        $mensaje .= "Carpeta temporal: " . $_FILES['imagen']['tmp_name'] . "<br />";

        // Intentamos copiar el archivo al servidor.
        if (!copy($_FILES['imagen']['tmp_name'], $dir . $_FILES['imagen']['name'])) {
            $mensaje .= "ERROR: no se pudo cargar el archivo.";
        } else {
            $mensaje .= "El archivo " . $_FILES['imagen']['name'] . " se ha copiado con Éxito.<br />";
        }
    } else {
        $mensaje .= "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal.";
    }

    return $mensaje; // Devolvemos el mensaje
}

?>

