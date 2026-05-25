<?php
include "../conexion.php";
if(isset($_POST['fecha'],$_POST['id_plaza'])){
    $fecha=$conexion->real_escape_string($_POST['fecha']);
    $id_plaza=$conexion->real_escape_string($_POST['id_plaza']);
    $sql="INSERT INTO corridas (fecha,id_plaza) VALUES ('$fecha','$id_plaza')";
    if($conexion->query($sql)===TRUE){
        header("Location: mostrar_corridas.php");
        exit();
    }else{
        die("Error al guardar corrida: ".$conexion->error);
    }
}else{
    die("Faltan datos.");
}
?>