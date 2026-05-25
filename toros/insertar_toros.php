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
<title>Insertar Toro</title>

<style>

body{
font-family:Arial;
background:url('fondo_toros.jpg') no-repeat center center fixed;
background-size:cover;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

form{
background:rgba(245,222,179,0.9);
padding:35px;
border-radius:15px;
width:400px;
}

h1{
text-align:center;
color:#800020;
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

<form action="guardar_toros.php" method="POST">

<h1>Insertar Toro</h1>

<label>Nombre</label>
<input type="text" name="nombre" required>

<label>Edad</label>
<input type="number" name="edad" required>

<label>Peso</label>
<input type="number" name="peso" required>

<label>Capa</label>
<input type="text" name="capa" required>

<label>ID Ganadería</label>
<input type="number" name="id_ganaderia" required>

<button type="submit">Guardar Toro</button>

</form>

</body>
</html>