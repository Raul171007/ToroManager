<?php
include "../conexion.php";

$sql="SELECT c.id_corrida, c.fecha, p.nombre AS plaza,
tc.id_toro, t.nombre AS nombre_toro,
tc.id_torero, tr.nombre_artistico AS nombre_torero,
tc.trofeo, tc.orden_salida
FROM corridas c
JOIN plazas p ON c.id_plaza = p.id_plaza
JOIN toros_corrida tc ON c.id_corrida = tc.id_corrida
JOIN toros t ON tc.id_toro = t.id_toro
JOIN toreros tr ON tc.id_torero = tr.id_torero
ORDER BY c.fecha DESC, tc.orden_salida ASC";

$resultado = $conexion->query($sql);
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
<title>Mostrar Corridas</title>
<style>
body{font-family:Arial;background:url('fondo_corridas.jpg') no-repeat center center fixed;background-size:cover;}
h1{text-align:center;color:#800020;margin-top:30px;}
table{width:95%;margin:auto;margin-top:40px;border-collapse:collapse;background:rgba(245,222,179,0.9);}
th{background:#800020;color:#f5deb3;padding:12px;}
td{padding:10px;border:1px solid #800020;text-align:center;}
</style>
</head>
<body>
<h1>Corridas</h1>
<table>
<tr>

<th>Fecha</th>
<th>Plaza</th>

<th>Toro</th>

<th>Torero</th>
<th>Orden</th>
<th>Trofeo</th>
</tr>
<?php while($fila=$resultado->fetch_assoc()){ ?>
<tr>

<td><?php echo $fila['fecha']; ?></td>
<td><?php echo $fila['plaza']; ?></td>

<td><?php echo $fila['nombre_toro']; ?></td>

<td><?php echo $fila['nombre_torero']; ?></td>
<td><?php echo $fila['orden_salida']; ?></td>
<td><?php echo $fila['trofeo']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>