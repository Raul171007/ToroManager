<?php
include "../conexion.php";
$id=$_GET['id'];
$fecha=$_POST['fecha'];
$id_plaza=$_POST['id_plaza'];
$sql="UPDATE corridas SET fecha='$fecha',id_plaza='$id_plaza' WHERE id_corrida='$id'";
if($conexion->query($sql)===TRUE){
    echo "Corrida actualizada correctamente.<br><br>";
    echo "<a href='mostrar_corridas.php'>Volver a Corridas</a>";
}else{
    echo "Error al actualizar corrida: ".$conexion->error;
}
?>