<?php


include "../conexion.php";

$sql="SELECT toros.id_toro,
toros.nombre,
toros.edad,
toros.peso,
toros.capa,
ganaderias.nombre AS ganaderia

FROM toros
JOIN ganaderias ON toros.id_gan=ganaderias.id_gan";

$resultado=$conexion->query($sql);

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
<title>Mostrar Toros</title>

<style>

body{
font-family:Arial;
background:url('fondo_toros.jpg') no-repeat center center fixed;
background-size:cover;
}

h1{
text-align:center;
color:#800020;
margin-top:30px;
}

table{
width:85%;
margin:auto;
margin-top:40px;
border-collapse:collapse;
background:rgba(245,222,179,0.9);
}

th{
background:#800020;
color:#f5deb3;
padding:12px;
}

td{
padding:10px;
border:1px solid #800020;
text-align:center;
}

</style>

</head>

<body>

<h1>Toros</h1>

<table>

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Edad</th>
<th>Peso</th>
<th>Capa</th>
<th>Ganadería</th>

</tr>

<?php

while($fila=$resultado->fetch_assoc()){

?>

<tr>

<td><?php echo $fila['id_toro']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['edad']; ?></td>
<td><?php echo $fila['peso']; ?></td>
<td><?php echo $fila['capa']; ?></td>
<td><?php echo $fila['ganaderia']; ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>