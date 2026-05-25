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
<title>Actualizar Corrida</title>
<style>
body{font-family:Arial;background:url('fondo_corridas.jpg') no-repeat center center fixed;background-size:cover;display:flex;justify-content:center;align-items:center;height:100vh;}
form{background:rgba(245,222,179,0.9);padding:35px;border-radius:15px;width:350px;text-align:center;}
h1{color:#800020;text-align:center;}
input{width:100%;padding:10px;margin-top:15px;}
button{width:100%;padding:12px;margin-top:15px;background:#800020;color:#f5deb3;border:none;font-weight:bold;cursor:pointer;}
button:hover{background:#f5deb3;color:#800020;}
</style>
</head>
<body>
<form action="form_actualizar_corridas.php" method="GET">
<h1>Actualizar Corrida</h1>
<label>ID Corrida</label>
<input type="number" name="id" required>
<button type="submit">Buscar Corrida</button>
</form>
</body>
</html>