<?php
include "../conexion.php";
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
    <title>Actualizar Ganadería</title>
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

        form {
            background-color: rgba(128,0,32,0.85);
            padding: 40px;
            border-radius: 12px;
            width: 400px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
            color: #f5deb3;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: none;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 25px;
            border: none;
            border-radius: 6px;
            background-color: #f5deb3;
            color: #800020;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #deb887;
            color: #fff;
        }
    </style>
</head>
<body>

<form action="form_actualizar_ganaderias.php" method="GET">
    <h1>Actualizar Ganadería</h1>

    <label for="id">ID de la Ganadería:</label>
    <input type="number" id="id" name="id" required>

    <button type="submit">Buscar</button>
</form>

</body>
</html>
