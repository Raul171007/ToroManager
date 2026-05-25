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
    <title>Borrar Toreros</title>
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

        form {
            background-color: rgba(245,222,179,0.85);
            padding: 30px;
            border-radius: 15px;
            color: #000;
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #800020;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #800020;
        }

        button {
            margin-top: 20px;
            padding: 12px;
            width: 100%;
            background-color: #800020;
            color: #f5deb3;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            transition: 0.3s;
        }

        button:hover {
            background-color: #f5deb3;
            color: #800020;
        }
    </style>
</head>
<body>
    <form action="eliminar_toreros.php" method="GET">
        <h1>Borrar Toreros</h1>

        <label>ID del Torero a borrar:</label>
        <input type="number" name="id" required>

        <button type="submit">Borrar Torero</button>
    </form>
</body>
</html>
