<?php
include "../conexion.php";


if(isset($_GET['id'])){
    $id = $_GET['id'];

    
    $id = $conexion->real_escape_string($id);

    
    $sql = "DELETE FROM ganaderias WHERE id_gan='$id'";

    if($conexion->query($sql) === TRUE){
        $mensaje = "Ganadería eliminada correctamente.";
    } else {
        $mensaje = "Error al eliminar: " . $conexion->error;
    }
} else {
    $mensaje = "No se proporcionó ningún ID.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Ganadería</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('fondo_ganaderías.jpg') no-repeat center center fixed;
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
    <a href="mostrar_ganaderias.php">Volver a la Lista</a>
</div>
</body>
</html>
