<?php

include "../conexion.php";

if(isset($_GET['id'])){

$id=$conexion->real_escape_string($_GET['id']);

$sql="DELETE FROM toros WHERE id_toro='$id'";

if($conexion->query($sql)==TRUE){

echo "Toro eliminado correctamente.<br><br>";
echo "<a href='mostrar_toros.php'>Volver a Toros</a>";

}else{

echo "Error al eliminar toro: ".$conexion->error;

}

}else{

echo "No se proporcionó ID.";

}

?>