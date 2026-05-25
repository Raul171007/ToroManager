<?php
include "../conexion.php";

if(isset($_GET['id'])){
    $id = $conexion->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM toreros WHERE id_torero='$id'";
    $res = $conexion->query($sql);

    if($res->num_rows > 0){
        $fila = $res->fetch_assoc();
    } else {
        die("Torero no encontrado.");
    }
} else {
    die("No se proporcionó ningún ID.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Toreros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('fondo_toreros.jpeg') no-repeat center center fixed; 
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        form {
            background-color: rgba(245,222,179,0.85);
            padding: 30px;
            border-radius: 15px;
            color: #000;
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #800020;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #800020;
        }

        button {
            margin-top: 20px;
            padding: 12px;
            width: 100%;
            background-color: #800020;
            color: #f5deb3;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            transition: 0.3s;
        }

        button:hover {
            background-color: #f5deb3;
            color: #800020;
        }
    </style>
</head>
<body>
    <form action="editar_toreros.php?id=<?php echo $fila['id_torero']; ?>" method="POST">
        <h1>Editar Toreros</h1>

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required>

        <label>Nombre Artístico:</label>
        <input type="text" name="nombre_artistico" value="<?php echo $fila['nombre_artistico']; ?>" required>

        <label>Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="<?php echo $fila['fecha_nac']; ?>" required>

        <label>Nacionalidad:</label>
        <input type="text" name="nacionalidad" value="<?php echo $fila['nacionalidad']; ?>" required>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
