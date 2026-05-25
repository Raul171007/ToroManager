<?php

include "../conexion.php";

$id = $_GET['id'];
$nombre = $_POST['nombre'];
$inauguracion = $_POST['inauguracion'];
$ciudad = $_POST['ciudad'];
$aforo = $_POST['aforo'];

$sql = "UPDATE plazas SET
nombre='$nombre',
inauguracion='$inauguracion',
ciudad='$ciudad',
aforo='$aforo'
WHERE id_plaza='$id'";

 if($conexion->query($sql) === TRUE){
        $mensaje = "Plaza actualizada correctamente.";
    } else {
        $mensaje = "Error al actualizar plaza: " . $conexion->error;
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
    <title>Actualizar Plaza</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('fondo_plazas.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        .mensaje {
            background-color: rgba(128,0,32,0.85);
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            width: 500px;
        }
        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #f5deb3;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #f5deb3;
            color: #800020;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }
        a:hover {
            background-color: #deb887;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="mensaje">
    <h1>Resultado</h1>
    <p><?php echo $mensaje; ?></p>
    <a href="mostrar_plazas.php">Volver a la Lista</a>
</div>
</body>
</html>
