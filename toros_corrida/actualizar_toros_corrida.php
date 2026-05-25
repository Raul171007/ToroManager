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
<title>Actualizar Toro en Corrida</title>

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

input{
width:100%;
padding:8px;
margin-top:10px;
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

<form action="form_actualizar_toros_corrida.php" method="GET">

<h1>Actualizar Toro en Corrida</h1>

<label>ID Corrida</label>
<input type="number" name="id_corrida" required>

<label>ID Toro</label>
<input type="number" name="id_toro" required>

<button type="submit">Buscar</button>

</form>

</body>
</html>