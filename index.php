<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Gestión Taurina</title>

<style>
body{
font-family:Arial;
background:url("fondo_index.jpg") no-repeat center center fixed;
background-size:cover;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.contenedor{
background:rgba(245,222,179,0.9);
padding:40px;
border-radius:15px;
text-align:center;
}

h1{
color:#800020;
}

a{
display:block;
margin:10px;
padding:12px;
background:#800020;
color:#f5deb3;
text-decoration:none;
border-radius:8px;
}

a:hover{
background:#f5deb3;
color:#800020;
}
</style>

</head>

<body>

<div class="contenedor">

<h1>Gestión Taurina</h1>

<p>Bienvenido, <?php echo $_SESSION['usuario']; ?></p>

<a href="plazas/index_plazas.php">Gestión de Plazas</a>

<a href="toreros/index_toreros.php">Gestión de Toreros</a>

<a href="ganaderias/index_ganaderias.php">Gestión de Ganaderías</a>

<a href="toros/index_toros.php">Gestión de Toros</a>

<a href="corridas/index_corridas.php">Gestión de Corridas</a>

<a href="toros_corrida/index_toros_corrida.php">Toros en Corrida</a>



<a href="logout.php">Cerrar sesión</a>

</div>

</body>
</html>