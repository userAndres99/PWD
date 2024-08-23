<?php
class ControlArchivo {

    private $dir; // Directorio donde se guardarán los archivos
    private $types; // Extensiones de archivos permitidas

    public function __construct($dir = '../../Archivos/Imagenes/',  $types = ['jpg', 'png']) {
        $this->dir = $dir;
        $this->types = $types;
    }

    public function validarArchivo($file) {
        $valido = true;

        // Comprobamos que no se hayan producido errores
        if ($file["error"] > 0) {
            $valido = false;
        }

        // Obtenemos la extensión del archivo
        //pathinfo se usa para obtener info del archivo
        //PATHINFO_EXTENSION es para solo pedir la extension de ese archivo
        //strtolower para asegurarme de que este en minuscula
        $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        // Verificamos la extensión del archivo
        if ($fileExtension !== 'jpg' && $fileExtension !== 'png') {
            $valido = false;
        }

        return $valido;
    }
}