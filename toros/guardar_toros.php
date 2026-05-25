<?php

include "../conexion.php";

if(isset($_POST['nombre'],$_POST['edad'],$_POST['peso'],$_POST['capa'],$_POST['id_gan'])){

$nombre=$conexion->real_escape_string($_POST['nombre']);
$edad=$conexion->real_escape_string($_POST['edad']);
$peso=$conexion->real_escape_string($_POST['peso']);
$capa=$conexion->real_escape_string($_POST['capa']);
$id_gan=$conexion->real_escape_string($_POST['id_gan']);

$sql="INSERT INTO toros (nombre,edad,peso,capa,id_gan)
VALUES ('$nombre','$edad','$peso','$capa','$id_gan')";

if($conexion->query($sql)==TRUE){

header("Location: mostrar_toros.php");
exit();

}else{

die("Error al insertar toro: ".$conexion->error);

}

}else{

die("Faltan datos.");

}

?>