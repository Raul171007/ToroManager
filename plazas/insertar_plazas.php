<!DOCTYPE html>
<html lang="es">
    <?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../usuarios/login.php");
    exit();
}

include "../conexion.php";
?>
<head>
<meta charset="UTF-8">
<title>Insertar Plazas</title>
<style>
body{
    font-family: Arial;
    background:url('fondo_plazas.jpg') no-repeat center center fixed;
    background-size:cover;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}
form{
    background:rgba(245,222,179,0.9);
    padding:30px;
    border-radius:15px;
    width:400px;
}
h1 {
    font-size: 40px;
    margin-bottom: 30px;
    color: #f5deb3;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}
label{
    display:block;
    margin-top:10px;
}
input{
    width:100%;
    padding:8px;
    margin-top:5px;
}
button{
    width:100%;
    padding:12px;
    margin-top:15px;
    background:#800020;
    color:#f5deb3;
    border:none;
    font-weight:bold;
    cursor:pointer;
}
button:hover{
    background:#f5deb3;
    color:#800020;
}
</style>
</head>
<body>
<form action="guardar_plazas.php" method="POST">
<h1>Insertar Plazas</h1>

<label>Nombre:</label>
<input type="text" name="nombre" required>

<label>Inauguración:</label>
<input type="date" name="inauguracion" required>

<label>Ciudad:</label>
<input type="text" name="ciudad" required>

<label>Aforo:</label>
<input type="number" name="aforo" required>

<button type="submit">Guardar Plaza</button>
</form>
</body>
</html>