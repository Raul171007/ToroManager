<?php

include "../conexion.php";

if(isset($_GET['id'])){

$id=$conexion->real_escape_string($_GET['id']);

$sql="SELECT * FROM toros WHERE id_toro='$id'";

$resultado=$conexion->query($sql);

if($resultado->num_rows>0){

$fila=$resultado->fetch_assoc();

}else{

die("Toro no encontrado.");

}

}else{

die("No se proporcionó ID.");

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Editar Toro</title>

<style>

body{
font-family:Arial;
background:url('fondo_toros.jpg') no-repeat center center fixed;
background-size:cover;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

form{
background:rgba(245,222,179,0.9);
padding:35px;
border-radius:15px;
width:400px;
}

h1{
text-align:center;
color:#800020;
}

label{
display:block;
margin-top:10px;
}

input{
width:100%;
padding:8px;
margin-top:5px;
}

button{
width:100%;
padding:12px;
margin-top:15px;
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

<form action="editar_toros.php?id=<?php echo $fila['id_toro']; ?>" method="POST">

<h1>Editar Toro</h1>

<label>Nombre</label>
<input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required>

<label>Edad</label>
<input type="number" name="edad" value="<?php echo $fila['edad']; ?>" required>

<label>Peso</label>
<input type="number" name="peso" value="<?php echo $fila['peso']; ?>" required>

<label>Capa</label>
<input type="text" name="capa" value="<?php echo $fila['capa']; ?>" required>

<label>ID Ganadería</label>
<input type="number" name="id_gan" value="<?php echo $fila['id_gan']; ?>" required>

<button type="submit">Guardar Cambios</button>

</form>

</body>
</html>