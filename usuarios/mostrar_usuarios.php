<?php
include "../conexion.php";

$sql="SELECT * FROM usuarios";
$res=$conexion->query($sql);
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
background:url('fondo_usuarios.jpg') no-repeat center center fixed;
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

<h1>Usuarios</h1>

<table>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>Rol</th>
</tr>

<?php while($fila=$res->fetch_assoc()){ ?>

<tr>
<td><?php echo $fila['id_usuario']; ?></td>
<td><?php echo $fila['nombre_usuario']; ?></td>
<td><?php echo $fila['email']; ?></td>
<td><?php echo $fila['rol']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>