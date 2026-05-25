<?php
include "../conexion.php";

$id_corrida = $_POST['id_corrida'];
$id_toro = $_POST['id_toro'];
$id_torero = $_POST['id_torero'];
$indultado = $_POST['indultado'];
$orden_salida = $_POST['orden_salida'];

$sql = "UPDATE toros_corrida SET
id_torero='$id_torero',
indultado='$indultado',
orden_salida='$orden_salida'
WHERE id_corrida='$id_corrida' AND id_toro='$id_toro'";

if($conexion->query($sql)){
    echo "Registro actualizado correctamente";
}else{
    echo "Error: ".$conexion->error;
}
?>