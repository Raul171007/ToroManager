<?php
include "../conexion.php";
$resultado = $conexion->query("SELECT * FROM plazas");
?>

<!DOCTYPE html>
<html lang="es">
    <?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../usuarios/login.php");
    exit();
}

include "../conexion.php";
?>
<head>
<meta charset="UTF-8">
<title>Mostrar Plazas</title>
<style>
body{
    font-family:Arial;
    background:url('fondo_plazas.jpg') no-repeat center center fixed;
    background-size:cover;
}
table{
    width:80%;
    margin:auto;
    margin-top:50px;
    background:rgba(245,222,179,0.9);
    border-collapse:collapse;
}
th,td{
    padding:12px;
    border:1px solid #800020;
    text-align:center;
}
th{
    background:#800020;
    color:#f5deb3;
}
h1{
    text-align:center;
    color:#800020;
}
a{
    color:#800020;
    font-weight:bold;
}
</style>
</head>
<body>

<h1>Plazas</h1>

<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Inauguración</th>
<th>Ciudad</th>
<th>Aforo</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()){ ?>
<tr>
<td><?php echo $fila['id_plaza']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['inauguracion']; ?></td>
<td><?php echo $fila['ciudad']; ?></td>
<td><?php echo $fila['aforo']; ?></td>
</tr>
<?php } ?>
</table>

</body>
</html>