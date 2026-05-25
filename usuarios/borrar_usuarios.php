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
<title>Borrar Usuario</title>

<style>

body{
font-family:Arial;
background:url("fondo_usuarios.jpg") no-repeat center center fixed;
background-size:cover;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

form{
background:rgba(245,222,179,0.9);
padding:35px;
border-radius:12px;
width:300px;
}

h1{
text-align:center;
color:#800020;
}

input{
width:100%;
padding:10px;
margin-top:10px;
}

button{
margin-top:15px;
width:100%;
padding:12px;
background:#800020;
color:#f5deb3;
border:none;
font-weight:bold;
cursor:pointer;
}

</style>

</head>

<body>

<form action="eliminar_usuarios.php" method="POST">

<h1>Borrar Usuario</h1>

<input type="text" name="nombre" placeholder="Nombre Usuario" required>

<button type="submit">Eliminar</button>

</form>

</body>
</html>