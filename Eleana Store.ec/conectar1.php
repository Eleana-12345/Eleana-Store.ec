<?php
$host = "localhost";
$user = "root";
$pass = ""; // Cambia según tu configuración
$db = "pago"; // Cambia según el nombre de tu base de datos

$enlace = mysqli_connect($host, $user, $pass, $db);

if (!$enlace) {
    die("Error en la conexión: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa"; // Solo para verificar
}
?>