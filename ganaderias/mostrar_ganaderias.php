<?php
include "../conexion.php";

$resultado = $conexion->query("SELECT * FROM ganaderias");
if(!$resultado){
    die("Error en la consulta: " . $conexion->error);
}
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
    <title>Mostrar Ganaderías</title>
    <style>
      body{
font-family:Arial;
background:url('fondo_ganaderías.jpg') no-repeat center center fixed;
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

<h1>Lista de Ganaderías</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Propietario</th>
        <th>Provincia</th>
        <th>Nombre</th>
        <th>Fundación</th>
    </tr>

    <?php while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $fila['id_gan']; ?></td>
        <td><?php echo $fila['propietario']; ?></td>
        <td><?php echo $fila['provincia']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['fundacion']; ?></td>
       
    </tr>
    <?php } ?>
</table>



</body>
</html>
