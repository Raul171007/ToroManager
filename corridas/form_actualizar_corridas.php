<?php
include "../conexion.php";

// Verificamos que el id llegue por GET
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $conexion->real_escape_string($_GET['id']);
    
    $res = $conexion->query("SELECT * FROM corridas WHERE id_corrida='$id'");
    
    if($res->num_rows > 0){
        $fila = $res->fetch_assoc();
    } else {
        die("No se encontró la corrida con ID = $id.");
    }

} else {
    die("No se proporcionó el ID de la corrida.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Corrida</title>
<style>
body{
    font-family:Arial;
    background:url('fondo_corridas.jpg') no-repeat center center fixed;
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
h1{text-align:center;color:#800020;}
label{display:block;margin-top:10px;}
input{width:100%;padding:8px;margin-top:5px;}
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
button:hover{background:#f5deb3;color:#800020;}
</style>
</head>
<body>

<form action="editar_corridas.php?id=<?php echo $fila['id_corrida']; ?>" method="POST">
<h1>Editar Corrida</h1>

<label>Fecha</label>
<input type="date" name="fecha" value="<?php echo $fila['fecha']; ?>" required>

<label>ID Plaza</label>
<input type="number" name="id_plaza" value="<?php echo $fila['id_plaza']; ?>" required>

<button type="submit">Guardar Cambios</button>
</form>

</body>
</html>