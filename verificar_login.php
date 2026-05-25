<?php
session_start();
include "conexion.php";

$email = $_POST['email'];
$password = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){

    $usuario = $resultado->fetch_assoc();

    if(password_verify($password, $usuario['contrasena'])){

        $_SESSION['usuario'] = $usuario['nombre_usuario'];
        setcookie("ultimo_usuario", $email, time() + (86400 * 30), "/");
        $_SESSION['rol'] = $usuario['rol'];

        header("Location: index.php");
        exit();

    }else{
        header("Location: login.php?error=1");
    }

}else{
    header("Location: login.php?error=1");
}


?>