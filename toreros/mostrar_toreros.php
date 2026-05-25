<?php
include "../conexion.php";

$sql = "SELECT * FROM toreros";
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
    <title>Lista de Toreros</title>
    <style>
       body{
font-family:Arial;
background:url('fondo_toreros.jpeg') no-repeat center center fixed;
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
    <h1>Lista de Toreros</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nombre Artístico</th>
            <th>Fecha de Nacimiento</th>
            <th>Nacionalidad</th>
        </tr>
        <?php while($fila = $resultado->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $fila['id_torero']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['nombre_artistico']; ?></td>
            <td><?php echo $fila['fecha_nac']; ?></td>
            <td><?php echo $fila['nacionalidad']; ?></td>
        </tr>
        <?php } ?>
    </table>
   
</body>
</html>
