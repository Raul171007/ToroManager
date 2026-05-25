<?php
include "../conexion.php";

$nombre=$_POST['nombre'];

$sql="DELETE FROM usuarios WHERE nombre_usuario='$nombre'";

if($conexion->query($sql)){
    header("Location: mostrar_usuarios.php");
exit();

}else{

die("Error al eliminar usuario: ".$conexion->error);

}
?>