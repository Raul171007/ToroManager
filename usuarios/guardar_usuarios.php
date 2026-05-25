<?php
include "../conexion.php";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$rol = $_POST['rol'];

$sql="INSERT INTO usuarios (nombre_usuario,email,contrasena,rol)
VALUES ('$nombre','$email','$password','$rol')";

if($conexion->query($sql)){
    header("Location: mostrar_usuarios.php");
exit();

}else{

die("Error al insertar usuario: ".$conexion->error);

}



?>