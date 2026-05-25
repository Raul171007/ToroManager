<?php
include "conexion.php";

if(isset($_POST['nombre'], $_POST['inauguracion'], $_POST['ciudad'], $_POST['aforo'])){
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $inauguracion = $conexion->real_escape_string($_POST['inauguracion']);
    $ciudad = $conexion->real_escape_string($_POST['ciudad']);
    $aforo = $conexion->real_escape_string($_POST['aforo']);

    $sql = "INSERT INTO plazas (nombre, inauguracion, ciudad, aforo)
            VALUES ('$nombre','$inauguracion','$ciudad','$aforo')";

    if($conexion->query($sql) === TRUE){
        header("Location: mostrar_plazas.php");
        exit();
    } else {
        die("Error al guardar la plaza: " . $conexion->error);
    }
} else {
    die("Todos los campos son obligatorios.");
}
?>