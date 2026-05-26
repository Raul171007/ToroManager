<?php
include "../conexion.php";

$id_corrida = $_GET['id_corrida'];
$id_toro = $_GET['id_toro'];

$sql = "SELECT * FROM toros_corrida 
WHERE id_corrida='$id_corrida' AND id_toro='$id_toro'";

$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Toro en Corrida</title>

<style>

body{
font-family:Arial;
background:url("fondo_toros_corrida.jpg") no-repeat center center fixed;
background-size:cover;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

form{
background:rgba(245,222,179,0.9);
padding:35px;
border-radius:12px;
width:350px;
}

h1{
color:#800020;
text-align:center;
}

label{
display:block;
margin-top:10px;
}

input,select{
width:100%;
padding:8px;
margin-top:5px;
}

button{
margin-top:15px;
width:100%;
padding:10px;
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

<form action="editar_toros_corrida.php" method="POST">

<h1>Editar Toro en Corrida</h1>

<input type="hidden" name="id_corrida" value="<?php echo $fila['id_corrida']; ?>">
<input type="hidden" name="id_toro" value="<?php echo $fila['id_toro']; ?>">

<label>ID Torero</label>
<input type="number" name="id_torero" value="<?php echo $fila['id_torero']; ?>" required>

<label>Trofeo</label>
<select name="indultado">
<option value="0" <?php if($fila['trofeo']==1) echo "selected"; ?>></option>
<option value="1" <?php if($fila['trofeo']==1) echo "selected"; ?>>1 Oreja</option>
<option value="2" <?php if($fila['trofeo']==0) echo "selected"; ?>>2 Orejas</option>
<option value="2" <?php if($fila['trofeo']==0) echo "selected"; ?>>Rabo</option>
<option value="2" <?php if($fila['trofeo']==0) echo "selected"; ?>>Indultado</option>
</select>

<label>Orden de salida</label>
<input type="number" name="orden_salida" value="<?php echo $fila['orden_salida']; ?>" required>

<button type="submit">Guardar Cambios</button>

</form>

</body>
</html>