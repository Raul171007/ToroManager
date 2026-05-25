<?php
include "../conexion.php";

$sql = "SELECT 
tc.id_corrida,
t.nombre AS toro,
tr.nombre_artistico AS torero,
tc.trofeo,
tc.orden_salida
FROM toros_corrida tc
JOIN toros t ON tc.id_toro = t.id_toro
JOIN toreros tr ON tc.id_torero = tr.id_torero
ORDER BY tc.id_corrida, tc.orden_salida";

$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>

<html>
    <?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

?>
<head>

<style>

body{
font-family:Arial;
background:url('fondo_toros_corrida.jpg') no-repeat center center fixed;
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

<div class="contenedor">

<h1>Toros lidiados en Corrida</h1>

<table>

<tr>
<th>Corrida</th>
<th>Toro</th>
<th>Torero</th>
<th>Trofeo</th>
<th>Orden</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()){ ?>

<tr>

<td><?php echo $fila['id_corrida']; ?></td>

<td><?php echo $fila['toro']; ?></td>

<td><?php echo $fila['torero']; ?></td>

<td><?php echo $fila['trofeo']; ?></td>



<td><?php echo $fila['orden_salida']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>