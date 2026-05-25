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
<title>Insertar Corrida</title>
<style>
body{font-family:Arial;background:url('fondo_corridas.jpg') no-repeat center center fixed;background-size:cover;display:flex;justify-content:center;align-items:center;height:100vh;}
form{background:rgba(245,222,179,0.9);padding:35px;border-radius:15px;width:400px;}
h1{text-align:center;color:#800020;}
label{display:block;margin-top:10px;}
input, select{width:100%;padding:8px;margin-top:5px;}
button{width:100%;padding:12px;margin-top:15px;background:#800020;color:#f5deb3;border:none;font-weight:bold;cursor:pointer;}
button:hover{background:#f5deb3;color:#800020;}
</style>
</head>
<body>
<form action="guardar_corridas.php" method="POST">
<h1>Insertar Corrida</h1>
<label>Fecha</label>
<input type="date" name="fecha" required>
<label>ID Plaza</label>
<input type="number" name="id_plaza" required>
<button type="submit">Guardar Corrida</button>
</form>
</body>
</html>