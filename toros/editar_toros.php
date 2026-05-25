<?php

include "../conexion.php";

if(isset($_POST['nombre'],$_POST['edad'],$_POST['peso'],$_POST['capa'],$_POST['id_gan'],$_GET['id'])){

$id=$conexion->real_escape_string($_GET['id']);

$nombre=$conexion->real_escape_string($_POST['nombre']);
$edad=$conexion->real_escape_string($_POST['edad']);
$peso=$conexion->real_escape_string($_POST['peso']);
$capa=$conexion->real_escape_string($_POST['capa']);
$id_gan=$conexion->real_escape_string($_POST['id_gan']);

$sql="UPDATE toros SET
nombre='$nombre',
edad='$edad',
peso='$peso',
capa='$capa',
id_gan='$id_gan'
WHERE id_toro='$id'";

if($conexion->query($sql)==TRUE){

echo "Toro actualizado correctamente.<br><br>";
echo "<a href='mostrar_toros.php'>Volver a Toros</a>";

}else{

echo "Error al actualizar toro: ".$conexion->error;

}

}else{

echo "Faltan datos.";

}

?>