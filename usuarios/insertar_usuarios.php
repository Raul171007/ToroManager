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
<title>Insertar Usuario</title>

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
width:350px;
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
padding:10px;
margin-top:5px;
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

button:hover{
background:#f5deb3;
color:#800020;
}

</style>

</head>

<body>

<form action="guardar_usuarios.php" method="POST">

<h1>Insertar Usuario</h1>

<label>Nombre</label>
<input type="text" name="nombre" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Contraseña</label>
<input type="password" name="contrasena" required>

<label>Rol</label>
<input type="text" name="rol">

<button type="submit">Guardar</button>

</form>

</body>
</html>