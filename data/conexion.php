<?php
$server = "localhost";
$user = "root";
$pwd = "";
$db = "copart";

$conexion =new mysqli($server,$user,$pwd,$db);

if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa"; // Puedes habilitar este mensaje para verificar que la conexión se ha establecido correctamente.
}
?>