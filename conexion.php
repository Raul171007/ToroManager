<?php
$host = "localhost";
$usuario = "root";
$password = "";
$baseDatos = "crud_toros";


$conexion = new mysqli($host, $usuario, $password, $baseDatos, 3307);


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
