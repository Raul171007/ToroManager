<?php
include "../conexion.php";


$propietario = $_POST['propietario'];
$provincia = $_POST['provincia'];
$nombre = $_POST['nombre'];
$fundacion = $_POST['fundacion'];


$sql = "INSERT INTO ganaderias (propietario, provincia, nombre, fundacion) VALUES ('$propietario','$provincia','$nombre','$fundacion')";

if($conexion->query($sql) === TRUE){
    header("Location: mostrar_ganaderias.php");
    exit();
} else {
    die("Error al guardar: " . $conexion->error);
}
?>