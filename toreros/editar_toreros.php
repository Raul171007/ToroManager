<?php
include "../conexion.php";

if(isset($_POST['nombre'], $_POST['nombre_artistico'], $_POST['fecha_nacimiento'], $_POST['nacionalidad'], $_GET['id_torero'])){
    $id = $conexion->real_escape_string($_GET['id_torero']);
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $nombre_artistico = $conexion->real_escape_string($_POST['nombre_artistico']);
    $fecha_nacimiento = $conexion->real_escape_string($_POST['fecha_nacimiento']);
    $nacionalidad = $conexion->real_escape_string($_POST['nacionalidad']);

    $sql = "UPDATE toreros SET nombre='$nombre', nombre_artistico='$nombre_artistico', fecha_nacimiento='$fecha_nacimiento', nacionalidad='$nacionalidad' WHERE id='$id'";
    
    if($conexion->query($sql) === TRUE){
        $mensaje = "Torero actualizado correctamente.";
    } else {
        $mensaje = "Error al actualizar torero: " . $conexion->error;
    }
} else {
    $mensaje = "Faltan datos.";
}
?>
<!DOCTYPE html>
<html lang="es">
    <?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}


?>
<head>
    <meta charset="UTF-8">
    <title>Actualizar Toreros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('fondo_toreros.jpeg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        div {
            background-color: rgba(245,222,179,0.85);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            color: #000;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #800020;
            color: #f5deb3;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        a:hover {
            background-color: #f5deb3;
            color: #800020;
        }
    </style>
</head>
<body>
    <div>
        <p><?php echo $mensaje; ?></p>
        <a href="mostrar_toreros.php">Volver a Toreros</a>
    </div>
</body>
</html>
