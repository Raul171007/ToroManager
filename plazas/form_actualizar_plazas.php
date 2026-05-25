<?php
include "conexion.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $id = $conexion->real_escape_string($id);

    $sql = "SELECT * FROM plazas WHERE id_plaza='$id'";
    $resultado = $conexion->query($sql);

    if($resultado && $resultado->num_rows > 0){
        $fila = $resultado->fetch_assoc();
    } else {
        die("No se encontró ninguna plaza con ese ID.");
    }

} else {
    die("No se recibió ningún ID.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Ganadería</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('fondo_plazas.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        form {
            background-color: rgba(128,0,32,0.9);
            padding: 40px;
            border-radius: 12px;
            width: 450px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
            color: #f5deb3;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: none;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 25px;
            border: none;
            border-radius: 6px;
            background-color: #f5deb3;
            color: #800020;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #deb887;
            color: #fff;
        }
    </style>
</head>
<body>

<form action="editar_plazas.php?id=<?php echo $fila['id_plaza']; ?>" method="POST">
    <h1>Editar Plaza</h1>

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required>

    <label>Inauguracion:</label>
    <input type="number" name="inauguracion" value="<?php echo $fila['inauguracion']; ?>" required>

    <label>Ciudad:</label>
    <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>" required>

    <label>Aforo:</label>
    <input type="number" name="aforo" value="<?php echo $fila['aforo']; ?>" required>

    <button type="submit">Guardar Cambios</button>
</form>

</body>
</html>