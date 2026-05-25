<!DOCTYPE html>
<html lang="es">
    <?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

include "../conexion.php";
?>

<head>

<meta charset="UTF-8">
<title>Gestión de Toros</title>

<style>

 body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('fondo_toros.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            text-align: center;
            padding-top: 100px;
        }
        h1 {
            font-size: 40px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
        }
         p {
            font-size: 30px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
        }
        a {
            display: inline-block;
            margin: 20px;
            padding: 15px 30px;
            background-color: rgba(128, 0, 32, 0.8);
            color: #f5deb3;
            text-decoration: none;
            border-radius: 8px;
            font-size: 20px;
            transition: 0.3s;
        }
        a:hover {
            background-color: rgba(245, 222, 179, 0.6);
            color: #800020;
        }

</style>

</head>

<body>

<div>

<h1>Gestión de Toros</h1>
<p>
Bienvenido/a, <?php echo $_SESSION['usuario']; ?>
</p>

<a href="mostrar_toros.php">Mostrar Toros</a>

<a href="insertar_toros.php">Insertar Toro</a>

<a href="borrar_toros.php">Borrar Toro</a>

<a href="actualizar_toros.php">Actualizar Toro</a>

<a href="../logout.php">Cerrar sesión</a>

</div>

</body>
</html>