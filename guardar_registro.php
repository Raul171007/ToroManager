<?php
include "conexion.php";

$nombre = $_POST['nombre_usuario'];
$email = $_POST['email'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$rol = $_POST['rol'];

$check = $conexion->query("SELECT * FROM usuarios WHERE email='$email'");
if($check->num_rows > 0){
    header("Location: registro.php?error=1");
    exit();
}

$sql = "INSERT INTO usuarios (nombre_usuario, email, contrasena, rol) 
        VALUES ('$nombre', '$email', '$contrasena', '$rol')";

if($conexion->query($sql)){
    header("Location: login.php");
}else{
    header("Location: registro.php?error=1");
}
exit();
?>