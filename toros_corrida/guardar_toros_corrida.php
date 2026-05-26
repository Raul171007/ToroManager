<?php
include "../conexion.php";

$id_corrida = $_POST['id_corrida'];
$id_toro = $_POST['id_toro'];
$id_torero = $_POST['id_torero'];
$trofeo = $_POST['trofeo'];
$orden_salida = $_POST['orden_salida'];

$sql = "INSERT INTO toros_corrida 
(id_corrida,id_toro,id_torero,trofeo,orden_salida)
VALUES
('$id_corrida','$id_toro','$id_torero','trofeo','$orden_salida')";

if($conexion->query($sql)){
    echo "Toro añadido correctamente a la corrida";
}else{
    echo "Error: ".$conexion->error;
}

?>