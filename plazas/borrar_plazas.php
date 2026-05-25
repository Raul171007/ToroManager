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
<title>Borrar Plazas</title>
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
    text-align:center;
}
h1{
    color:#800020;
    margin-bottom:20px;
}
input{
    width:100%;
    padding:8px;
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
button:hover{
    background:#f5deb3;
    color:#800020;
}
</style>
</head>
<body>
<form action="eliminar_plazas.php" method="GET">
<h1>Borrar Plazas</h1>
<label>ID de la Plaza a borrar:</label>
<input type="number" name="id" required>
<button type="submit">Borrar Plaza</button>
</form>
</body>
</html>