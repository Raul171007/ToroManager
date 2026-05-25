<?php
include "../conexion.php";

if(isset($_POST['nombre'], $_POST['nombre_artistico'], $_POST['fecha_nacimiento'], $_POST['nacionalidad'])){
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $nombre_artistico = $conexion->real_escape_string($_POST['nombre_artistico']);
    $fecha_nacimiento = $conexion->real_escape_string($_POST['fecha_nacimiento']);
    $nacionalidad = $conexion->real_escape_string($_POST['nacionalidad']);

    $sql = "INSERT INTO toreros (nombre, nombre_artistico, fecha_nac, nacionalidad)
            VALUES ('$nombre', '$nombre_artistico', '$fecha_nacimiento', '$nacionalidad')";

    if($conexion->query($sql) === TRUE){
        header("Location: mostrar_toreros.php"); 
        exit();
    } else {
        die("Error al guardar el torero: " . $conexion->error);
    }
} else {
    die("Todos los campos son obligatorios.");
}
?>
