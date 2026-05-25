<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Registro</title>
<style>
body{
    font-family:Arial;
    background:url("fondo_index.jpg") no-repeat center center fixed;
    background-size:cover;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}
form{
    background:rgba(245,222,179,0.9);
    padding:35px;
    border-radius:12px;
    width:350px;
}
h1{
    text-align:center;
    color:#800020;
}
input, select{
    width:100%;
    padding:10px;
    margin-top:10px;
}
button{
    margin-top:15px;
    width:100%;
    padding:12px;
    background:#800020;
    color:#f5deb3;
    border:none;
    font-weight:bold;
    cursor:pointer;
}
button:hover{
    background:#f5deb3;
    color:#800020;
}
.error{
    color:red;
    text-align:center;
    margin-top:10px;
}
a{
    display:block;
    text-align:center;
    margin-top:10px;
    color:#800020;
}
</style>
</head>
<body>
<form action="guardar_registro.php" method="POST">
    <h1>Registro</h1>
    <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="contrasena" placeholder="Contraseña" required>
    <select name="rol">
        <option value="usuario">Usuario</option>
        <option value="admin">Admin</option>
    </select>
    <button type="submit">Registrarse</button>
    <?php if(isset($_GET['error'])){ echo "<p class='error'>El email ya está registrado</p>"; } ?>
    <a href="login.php">¿Ya tienes cuenta? Inicia sesión</a>
</form>
</body>
</html>