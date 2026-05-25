<?php
include "../conexion.php";

if(isset($_GET['id'])){
    $id = $conexion->real_escape_string($_GET['id']);
    $sql = "DELETE FROM toreros WHERE id_torero='$id'";
    
    if($conexion->query($sql) === TRUE){
        $mensaje = "Torero eliminado correctamente.";
    } else {
        $mensaje = "Error al eliminar torero: " . $conexion->error;
    }
} else {
    $mensaje = "No se proporcionó ningún ID.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Toreros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('fondo_toreros.jpeg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #fff;
        }

        div {
            background-color: rgba(245,222,179,0.85); 
            padding: 30px;
            border-radius: 15px;
            color: #000;
            text-align: center;
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
