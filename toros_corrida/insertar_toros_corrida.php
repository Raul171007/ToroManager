<!DOCTYPE html>
<html lang="es">
    <?php
    include "../conexion.php";
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}


?>
<head>
<meta charset="UTF-8">
<title>Insertar Toro en Corrida</title>

<style>

body{
font-family:Arial;
background:url("fondo_toros_corrida.jpg") no-repeat center center fixed;
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
color:#800020;
text-align:center;
}

label{
display:block;
margin-top:10px;
}

input,select{
width:100%;
padding:8px;
margin-top:5px;
}

button{
margin-top:15px;
width:100%;
padding:10px;
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

<form action="guardar_toros_corrida.php" method="POST">

<h1>Insertar Toro en Corrida</h1>

<label>ID Corrida</label>
<input type="number" name="id_corrida" required>

<label>ID Toro</label>
<input type="number" name="id_toro" required>

<label>ID Torero</label>
<input type="number" name="id_torero" required>

<label>Indultado</label>
<select name="indultado">
<option value="1">Sí</option>
<option value="0">No</option>
</select>

<label>Orden de salida</label>
<input type="number" name="orden_salida" required>

<button type="submit">Guardar</button>

</form>

</body>
</html>