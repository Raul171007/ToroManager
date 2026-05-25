<?php
include "../conexion.php";
if(isset($_GET['id'])){
    $id=$conexion->real_escape_string($_GET['id']);
    $sql="DELETE FROM corridas WHERE id_corrida='$id'";
    if($conexion->query($sql)===TRUE){
        echo "Corrida eliminada correctamente.<br><br>";
        echo "<a href='mostrar_corridas.php'>Volver a Corridas</a>";
    }else{
        echo "Error al eliminar corrida: ".$conexion->error;
    }
}else{
    echo "No se proporcionó ID.";
}
?>