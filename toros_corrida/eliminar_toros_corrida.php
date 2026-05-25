<?php
include "../conexion.php";

$id_corrida = $_POST['id_corrida'];
$id_toro = $_POST['id_toro'];

$sql = "DELETE FROM toros_corrida 
WHERE id_corrida='$id_corrida' AND id_toro='$id_toro'";

if($conexion->query($sql)){
    echo "Toro eliminado de la corrida correctamente";
}else{
    echo "Error: ".$conexion->error;
}
?>