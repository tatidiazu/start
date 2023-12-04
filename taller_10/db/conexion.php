<?php

    $host = 'localhost';
    $usuario = 'mtdiazu';
    $host = '123456sS!$';
    $usuario = 'mi_proyecto';

    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);

    if (conexion->connect_errno) {
        echo "fallos en conexión";
        exit();
    }

?>
